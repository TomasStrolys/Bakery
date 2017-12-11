<?php



namespace app;



class Bakery
{

    public function __construct()
    {

        $method = $_SERVER['REQUEST_METHOD'];
        $view = $_GET['view'];
        $action = $_GET['action'];

        if ($method == 'GET') {


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

            }
        }
        elseif ($method == 'POST')
        {


            switch ($view)
            {
                case 'product';

                    if ($action == 'create')
                        $this->show((new ProductController())->store());

                    break;
                case 'product_history';

                if ($action == 'create')
                    $this->show((new Product_historyController())->store());

                     break;
            }
        }

    }
    private function show (string $text)
    {
        echo $text;
    }
}