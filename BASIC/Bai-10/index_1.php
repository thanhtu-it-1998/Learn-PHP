<?php
    session_start();
    $_SESSION['key_1'] = 'Thanh Tu';
    echo $_SESSION['key_1'];
    unset($_SESSION['key_1']);
?>

