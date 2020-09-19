<?php
     include './index_1.php';
     echo call();
     echo "<br>";

    function call_name(){
        echo "Thanh Tu";
    }

    function sum_1(){
        $num_1 = 1;
        $num_2 = 2;
        $num_3 = $num_1 + $num_2;
        return $num_3;
    }

    function sum_2($num_1,$num_2){
        $num_2 = $num_2;
        $num_1 = $num_1;
        $sum = $num_1 + $num_2;
        return $sum;
    }

    function change_value($value){
        $value = 20;
        return $value;
    }

    call_name();
    echo "<br>";
    echo sum_1();
    echo "<br>";
    echo sum_2(7,8);
    echo "<br>";
    echo change_value(8);
  
?>
