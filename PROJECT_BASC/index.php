<?php
$host     = "localhost";
$username = "root";
$password = "";
$db       = "manager_study";

$connect = new mysqli($host, $username, $password, $db);


$query = "SELECT * FROM study";
$get_database_study = $connect->query($query);
echo "<table style=\" border: 1px solid black;\">
    <tr>
      <th>Code student</th>
      <th>Name</th>
      <th>Address</th>
      <th>Class</th>
    </tr>";
while ($row = $get_database_study->fetch_assoc()) {
    echo " <tr>
      <td>". $row['code_student']."</td>
      <td>". $row['name_student']."</td>
      <td>". $row['address']."</td>

      <td>". $row['class']."</td>

    </tr>";
}
echo " </table>";
?>

