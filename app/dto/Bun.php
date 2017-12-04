<?php

class Bun
{
	const OWNER = 'BAKERY_INC';
	public static $Owner_two = 'UAB Bakery';
    private $a = 'A';

    protected $b = 'B';

    public $c = 'C';
}

Bun::$Owner_two = Bun::OWNER;

print_r(Bun::OWNER);
print_r(Bun::$Owner_two);
$bun = new Bun();
$bun->c = 'R';

//print_r($bun);
print_r($bun->c);
