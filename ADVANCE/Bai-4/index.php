<?php
class dong_vat
{

    public $bien_public;
    protected $biet_protected ;
    private $biet_private = "private";

    public function a()
    {
       echo  $this->biet_private;
    }

    private function b()
    {
    }
}
class cho extends dong_vat
{
    public function test_this(){
        $this->bien_public;
    }
}
$obj_cho = new cho();
//$obj_cho->bien_public;
 $obj_cho->a();
//$obj_cho->biet_protected;
//$obj_cho->biet_private;

