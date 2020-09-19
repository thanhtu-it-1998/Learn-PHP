<?php
   if(isset($_POST['upload'])){
      if(isset($_FILES['file']) && !$_FILES ['file']['error']){
          move_uploaded_file($_FILES ['file']['tmp_name'],'./img/'.$_FILES ['file']['name']);
          echo "Thanh Cong";
      }
    else{
        echo "error";
    }
   }
?>
 <html>
 <body>
     <form action="index_1.php" method="POST" enctype="multipart/form-data">
        <label for="file">File
            <input type="file" id="file" name="file">
        </label>
        <input type="submit" name="upload" value="upload">
     </form>
 </body>
 </html>