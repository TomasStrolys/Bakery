<?php

namespace app;


use app\model\Product;

class ProductController
{
      public function create()
      {
         //return file_get_contents('app/view/product/new-product.tpl');
          (new TemplateEngineController('new-product'))->echooutput();
      }
    public function store() : string
    {

        print_r($_POST);
        print_r($_FILES['picture']);

        $data= $_POST;
        $destination='uploads/' . $_FILES['picture']['name'];


        move_uploaded_file($_FILES['picture']['tmp_name'], $destination);

        $data['picture']=$destination;


        $model = new Product();
        $model->create($data);

        //Product::create($_POST);
        //(new Product())->create($_POST);

//        $model = new Product();
//        $model ->create($_POST);

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
                if ($key == 'picture')
                    $data .='<td><img src="' . $value . '" width="200px" lenght="200px"></td>';

                else
                $data .='<td>' . $value . '</td>';
            }
            $data .='</tr>';

        }

        $template= new TemplateEngineController('table-list');


            $template->set('header', $header);
            $template->set('data', $data);
            $template->echooutput();


    }

}