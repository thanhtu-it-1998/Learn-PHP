<?php
    spl_autoload_register(function($className){
        var_dump($className);
        die("Tao da den day");
    });