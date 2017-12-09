<?php

namespace app\model;


use app\model\interfaces\destroyable;
use app\model\interfaces\Manageable;

class Product extends CoreModel implements Manageable, destroyable
{

    protected $table ='bakery_products';

    public function create(array $data)
    {
        $query = $this->generateQuery( $data, true);
        print_r($this->query($query));
    }
    public function delete()
    {
        // TODO: Implement delete() method.
    }
    public function destroy()
    {
        // TODO: Implement destroy() method.
    }
}