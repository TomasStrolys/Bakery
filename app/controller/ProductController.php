<?php

namespace app;


use app\model\Product;

class ProductController
{
      public function create() : string
      {
         return file_get_contents('app/view/product/new.php');
      }
    public function store() : string
    {
        //Product::create($_POST);
        //(new Product())->create($_POST);

        $model = new Product();
        $model ->create($_POST);

        //Redirected to list
        header('Location:?view=product&action=list');
    }

    public function list()
    {
        $model = new Product();
        $result = $model->list();

        $header= '';
        $data='';

        foreach ($result as $item)
        {
            if( $header== '')
            {
                foreach ($item as $key => $value)
                {
                    $header .='<th>' . $key . '</th>';
                }
            }
            $data .= '<tr>';

            foreach ($item as $key => $value)
            {
                $data .='<td>' . $value . '</td>';
            }
            $data .='</tr>';

        }
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo $header;
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo $data;
        echo "</tbody>";
        echo "</table>";

    }
}