<?php

class Cows extends Animal {

    public function __construct()
    {
        parent::__construct();
        $this->type = 'Cow';
        $this->products = rand(8,12);
    }
    
}
