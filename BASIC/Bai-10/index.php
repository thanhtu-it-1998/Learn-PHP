<?php
   setcookie('TU',26,time() + 3600, "/");
?>
<html>
    <body>
        <h1><?php 

           if(isset($_COOKIE)){
               echo $_COOKIE['TU'];
               setcookie('TU',26,time() - 3600, "/");
           }
        ?>
        </h1>
    </body>
</html>