<?php
    $arr_0 = array(1,2,3);
    print_r($arr_0);
    $arr_1 = [1,2,3];
    $arr_1[] = 'work';
    print_r($arr_1);
    $arr_2 = [
        'key_1'=>'Tu',
        'key_2'=>[
            'key_sub'=>[
                'last_name'=>'Pham',
                'first_name'=>'Tuan',
            ]
        ],
    ];
    $arr_2['key_3'] = "Hieu";
    print_r($arr_2);
    echo $arr_2['key_2']['key_sub']['last_name'];
?>