<?php

namespace app;

use app\model\Product;
use app\model\Product_history;

class Product_historyController
{
    public function create()
    {


        //return file_get_contents('app/view/product/new-product.tpl');
        $template = (new TemplateEngineController('new-product-history'));
        $value = $this->getOptions();
        $template->set('productoptions', $value);
        $template->echooutput();
    }

    public function store(): string
    {
        //Product::create($_POST);
        //(new Product())->create($_POST);

        $model = new Product_history();
        $model->create($_POST);
        //Redirected to list
        header('Location:?view=product_history&action=list');
    }

    public function list()
    {
        $model = new Product_history();
        $result = $model->list();

        $header = '';
        $data = '';

        foreach ($result as $item) {
            if ($header == '') {
                foreach ($item as $key => $value) {
                    $header .= '<th>' . $key . '</th>';
                }
            }
            $data .= '<tr>';

            foreach ($item as $key => $value) {
                $data .= '<td>' . $value . '</td>';
            }
            $data .= '</tr>';

        }
        $template = new TemplateEngineController('table-list');


        $template->set('header', $header);
        $template->set('data', $data);
        $template->echooutput();
    }

    private function getOptions():string
    {
        $result = (new Product())->list();
        $options = '';

        foreach ($result as $value) {
            $options .= '<option value= "' . $value['id'] . '" >' . $value['name'] . '</option>';
        }
        return $options;
    }
}