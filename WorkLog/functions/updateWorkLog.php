<?php
include_once("../configs/connect.php");

if(isset($_POST['updateData'])){
  date_default_timezone_set('Europe/Ljubljana');
  $start = mysqli_real_escape_string($mysqli, $_POST['start']);
  $end = mysqli_real_escape_string($mysqli,$_POST['end']);
  $date = mysqli_real_escape_string($mysqli,$_POST['date']);
  $opis = mysqli_real_escape_string($mysqli,$_POST['opis']);
  $hoursId = $_POST['hoursId'];
  $time = date("Y-m-d h:i:sa");
  $userId = $_SESSION['userId'];
  $sql = "UPDATE  wHours SET start = '$start', end = '$end', date = '$date', opis = '$opis', modified =  '$time' where hoursId = $hoursId";
  $result = $mysqli->query($sql);
}
header("Location: ../logwork.php");
?>
