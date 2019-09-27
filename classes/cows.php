<?php

class Cows extends Animal {

    public function __construct()
    {
        parent::__construct();
        $this->type = 'Cow';
    }
    public function getMilk()
    {
        return random_int(8,12);      
    }
}
