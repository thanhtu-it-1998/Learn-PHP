<?php
   function test_variable_0(){
       $num_0 = 1;
       echo $num_0;
   }
    function test_variable_1(){
        global $num_1;
        $num_1 = 2;
        echo $num_1;
    }
    function test_variable_2(){
        static $num_2;
        $num_2 = 1;
        $num_2++;
        echo $num_2;
    }
    test_variable_0();
    test_variable_1();
    test_variable_2();
    test_variable_2();    
?>