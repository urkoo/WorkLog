<?php
session_start();
include_once("../configs/connect.php");

if(isset($_POST['inputData'])){
  date_default_timezone_set('Europe/Ljubljana');
  $time = date("Y-m-d h:i:sa");
  $start = mysqli_real_escape_string($mysqli, $_POST['start']);
  $end = mysqli_real_escape_string($mysqli,$_POST['end']);
  $date = mysqli_real_escape_string($mysqli,$_POST['date']);
  $opis = mysqli_real_escape_string($mysqli,$_POST['opis']);
  $userId = $_SESSION['userId'];
  $sql = "INSERT INTO `wHours` (`userId`, `start`, `end`, `date`, `opis`, `modified`) VALUES ('$userId', '$start', '$end', '$date', '$opis', '$time')";
  $result = $mysqli->query($sql);

  header("Location: ../logwork.php");
}
?>
