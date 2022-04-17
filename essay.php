<?php
include_once 'Connection.php'; //Database Connection Link
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
$sql = "SELECT * FROM users;"; //durchzuführendes Befehl/Query
$result = mysqli_query($conn, $sql);  //Speichern des Ergebnisses des Befehls in result
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
  while($row = mysqli_fetch_assoc($result)){
    echo $row['user_uid']. "<br>";*/
  }
}
 ?>

  </body>
</html>
