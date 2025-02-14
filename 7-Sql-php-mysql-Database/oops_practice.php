<?php

class test
{
    private $abc = [];
    function set($data)
    {
        $this->abc = $data;
    }

    function get()
    {
        return $this->abc;
    }
}


$objct = new test(); //encapsulate the code 
$TestArray = ["zahid", 18, "softwareEngineer"];

$objct->set($TestArray);

$result = $objct->get();

print_r($result);
