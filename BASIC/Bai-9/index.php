<?php
    if( isset($_GET['name']) && isset($_GET['age'])){
        echo $_GET['name'];
        echo "<br>";
        echo $_GET['age'];
    }
  
?>
 <html>
 <body>
     <form action="index.php" method="get">
        <label for="name">Name</label>
            <input type="text" id="name" name="name">
        <label for="age">Age</label>
            <input type="text"id="age" name="age">

        <input type="submit" name="" id="">
     </form>
 </body>
 </html>