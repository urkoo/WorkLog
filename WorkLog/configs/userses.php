<?php
session_start();
include_once("connect.php");
$query="select * from users where username='".$_SESSION['username2']."'";
$result=$mysqli->query($query);
if($result->num_rows == 1){
  $row=$result->fetch_assoc();
}

$_SESSION['username'] = $row['username']; 
$_SESSION['isAdmin']=$row['isAdmin'];
$_SESSION['name']=$row['ime'];
$_SESSION['surname']=$row['priimek'];
$_SESSION['DS']=$row['DS'];
$_SESSION['email']=$row['email'];
$_SESSION['phone']=$row['telSt'];
$_SESSION['userId']=$row['userId'];


?>
