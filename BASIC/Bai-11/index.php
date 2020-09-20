<?php
    $username ="root";
    $password = "";
    $host     ="localhost";
    $db       ='learn_php';
    
    $connectDB = new mysqli($host,$username,$password,$db);

    if($connectDB->connect_error){
        die('connect is error');
    }
  
    $query = "SELECT * FROM unit";
    $get_database_unit = $connectDB->query($query);
    
    while($row = $get_database_unit->fetch_assoc()){
       echo $row['Subject'];
       echo "<br>";
    }


?>