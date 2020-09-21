<?php
class Animals
{
    var $foot = 1;
    var $hair;

    function run()
    {
        return "Running";
    }

    function eat()
    {
    }
}

class Dog extends Animals
{
    var $foot = 4;
    function run()
    {
        return parent::run();
    }
}

$obj_dog = new Dog();
echo $obj_dog->foot;

echo $obj_dog->run();
