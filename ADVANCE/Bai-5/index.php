<?php
class a
{
    public $name = "";
    public function __construct($name = "")
    {
        $this->name = $name;
    }
    public function __destruct()
    {
        echo "chay vao ham destruct roi";
    }
}

$obj_a = new a();
echo  $obj_a->name;
