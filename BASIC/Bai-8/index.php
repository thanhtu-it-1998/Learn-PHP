<?php
    require '../Bai-5/index.php';
    
    $num = 2;

    while($num > 1){
        echo "Thanh cong";
        $num--;
    }

    do {
        echo " Thanh cong lap do while";
    }while($num > 1);

    for($index = 1; $index < 3; $index ++){
        echo "<br>";
        echo $index;
    }
    
    foreach( $arr_1 as $key=>$arr){
        echo "<br>";
        echo " $key".' '."$arr";
    }
?>