<?php
include_once("../configs/connect.php");

if(isset($_POST['id'])){
  $sql = 'SELECT isAdmin from users where userId = '.$_POST["id"];
  $result = $mysqli->query($sql);
  if(mysqli_num_rows($result) == 1){
    $row = $result->fetch_row();
    if($row[0] == 0){
      $sql = 'UPDATE users SET isAdmin = 1 where userId = '.$_POST["id"];

      $result = $mysqli->query($sql);
      echo 1;
    }
    else{
      $sql = 'UPDATE users SET isAdmin = 0 where userId = '.$_POST["id"];
      $result = $mysqli->query($sql);
      echo 0;
    }
  }


}

?>
