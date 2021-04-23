<?php
include_once("connect.php");
$query="select * from users where username='".$_SESSION['username']."'";
$result=mysqli_query($conn, $query);

$result=mysqli_fetch_assoc($result);
$_SESSION['isAdmin']=$result['isAdmin'];
$_SESSION['name']=$result['ime'];
$_SESSION['surname']=$result['priimek'];
$_SESSION['DS']=$result['DS'];
$_SESSION['email']=$result['email'];
$_SESSION['phone']=$result['telSt'];
mysqli_close($conn);



?>
