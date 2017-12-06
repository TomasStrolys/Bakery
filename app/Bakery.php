<?php



namespace app;



class Bakery
{

    public function __construct()
    {

        $method = $_SERVER['REQUEST_METHOD'];
        $view = $_GET['view'];
        $action = $_GET['action'];

        if ($method == 'GET')
        {


            switch ($view)
            {
                case 'product';

                    if ($action == 'new')
                        $this->show((new ProductController())->create());


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
            }
        }


        echo "Bakery Online!";

    }
    private function show (string $text)
    {
        echo $text;
    }
}