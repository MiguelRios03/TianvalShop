<?php

 class Shoe 
{
    var $name;
    var $price;
    var $path;
    var $id;
    var $amount;

    public function __construct($id, $name, $price, $amount, $path)
    {
        $this->name = $name;
        $this->price = $price;
        $this->path = $path;
        $this->id = $id;
        $this->amount = $amount;
    }
}

?>