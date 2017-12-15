<?php


namespace app;

use app\model\Users;


class UsersController
{
    public function create()
    {

        //return file_get_contents('app/view/product/new-product.tpl');
        (new TemplateEngineController('new-users'))->echooutput();
    }

    public function store(): string
    {
        //Product::create($_POST);
        //(new Product())->create($_POST);

        $data= $_POST;
        $data['password']=sha1($data['password'] .  SALT);

        $model = new Users();
        $model->create($data);
        //Redirected to list
        header('Location:?view=Users&action=list');
    }

    public function list()
    {
        $model = new Users();
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

        $template= new TemplateEngineController('table-list');


        $template->set('header', $header);
        $template->set('data', $data);
        $template->echooutput();


    }

    public function login()
    {
        $template= new TemplateEngineController('new-login');
        $template->echooutput();
    }
    public function auth()
    {
        $data=$_POST;
        $data['password']= sha1($data['password'] . SALT);
        print_r($data);

        $model=new Users();
        $result=$model->auth($data);

        //TODO check if result has any rows

        foreach ($result as $key => $value)
        {
            print_r($value);

            setcookie('user', $value['id'], time() + 3600);
            header('location:?view=product_history&action=new');
            exit();
        }

        //$model new User();
    }

    public function islogged()
    {
        if(isset($_COOKIE['user']))
        {
            $model = new Users();
            $result = $model->find($_COOKIE['user']);

            if ($result->num_rows != 1)
                die('please login');
        }
        else
            die('please login!');
    }
}