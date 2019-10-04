<?php

class Cows extends Animal {

    public static $totalMilk;
    public function __construct()
    {
        parent::__construct();
        $this->type = 'Cow';
    }
    public function getProducts()
    {
        $out = parent::getProducts();
        $out .= $this->products = random_int(8,12);
        self::$totalMilk += $this->products; 
    }
    
}
