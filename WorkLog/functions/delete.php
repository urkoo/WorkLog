<?php
include_once("../configs/connect.php");
if(isset($_POST['userId'])){
  $sql = 'DELETE from wHours where userId='.$_POST['userId'].'';
  $result = $mysqli->query($sql);
  $sql = 'DELETE from users where userId='.$_POST['userId'].'';
  $result = $mysqli->query($sql);
}
?>
