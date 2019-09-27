<?php

class Animal {
    
    public $type;
    public $uin;
    public function __construct()
    {
        $this->uin = getGUID();
    }
}