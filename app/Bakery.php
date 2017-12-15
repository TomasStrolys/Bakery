<?php



namespace app;



class Bakery
{

    public function __construct()
    {

        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'GET' && (!isset($_GET['view']) || !isset($_GET['action'])))
       {
           (new UsersController())->login();
           die();
      }

        $view = $_GET['view'];
        $action = $_GET['action'];

        if ($method == 'GET') {

            (new UsersController())->islogged();

            switch ($view) {
                case 'product';

                    if ($action == 'new')
                        (new ProductController())->create();
                    elseif ($action == 'list')
                        (new ProductController())->list();

                    break;

                case 'product_history';
                    if ($action == 'new')
                        (new Product_historyController())->create();
                    elseif ($action == 'list')
                        (new Product_historyController())->list();
                    break;

                case 'Users';
                    if ($action == 'new')
                        (new UsersController())->create();
                    elseif ($action == 'list')
                        (new UsersController())->list();
                    break;

            }
        }
        elseif ($method == 'POST') {


            switch ($view) {

                case 'product';

                    (new UsersController())->islogged();

                    if ($action == 'create')
                        (new ProductController())->store();

                    break;

                case 'product_history';

                    (new UsersController())->islogged();

                    if ($action == 'create')
                        (new Product_historyController())->store();
                    break;

                case 'Users';

                    if ($action == 'create')
                    {
                        (new UsersController())->islogged();
                        (new UsersController())->store();
                    }

                    elseif ($action == 'auth')
                        (new UsersController())->auth();

                    break;
            }
        }

    }
}
