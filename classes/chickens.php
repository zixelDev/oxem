<?php

class Chickens extends Animal {

    public static $totalEggs;
    public function __construct()
    {
        parent::__construct();
        $this->type = 'Chicken';
        
    }
    public function getProducts()
    {
        $out = parent::getProducts();
        $out .= $this->products = random_int(0,1);
        self::$totalEggs += $this->products; 
    }
}
