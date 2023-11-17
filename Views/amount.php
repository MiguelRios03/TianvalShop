<?php

 class Amount 
{
    var $id;
    var $amount;
   

    public function __construct($id, $amount)
    {
        $this->id = $id;
        $this->amount = $amount;
    }
}

?>