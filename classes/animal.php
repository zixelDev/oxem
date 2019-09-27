<?php

class Animal {
    
    public $type;
    public $uin;
    public $products;
    public function __construct()
    {
        $this->uin = getGUID();
    }
    public function getProducts(){
        return $this->products;
    }
}