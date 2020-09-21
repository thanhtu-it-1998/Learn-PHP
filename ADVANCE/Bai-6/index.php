<?php
abstract class dongvat
{
    public $chay = "run";
    abstract function Run();
}
class cho extends dong_vat
{
    public function Run(){
        return " Running";
    }
}
