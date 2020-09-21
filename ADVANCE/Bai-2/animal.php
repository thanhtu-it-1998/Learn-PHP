<?php
class Animals
{

    var $foot;
    var $header;

    function run($param = null)
    {
        return TRUE;
    }
    function eat($param = null)
    {
    }
}

$obj_animal = new Animals();

$obj_animal->foot = 2;
echo $obj_animal->foot;

$obj_animal->run();