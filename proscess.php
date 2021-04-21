<?php
session_start();
  include_once("connect.php");
  if(isset($_POST['login'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        // header("location: login.php?Empty= Please Fill in the blanks");
        echo("<script>location.href = 'login.php?Empty= Please Fill in the blanks';</script>");
    }
    else{
        $query="select * from users where username='".$_POST['username']."' and password='".$_POST['password']."'";
        $result=mysqli_query($conn, $query);

        if(mysqli_fetch_assoc($result)){
            $_SESSION['username']=$_POST['username'];
            // header("location: welcume.php");
            echo("<script>location.href = '/project/';</script>");
        }
        else{
            echo("<script>location.href = 'login.php?Invalid= Please enter correct username and password';</script>");
        //   header("location: login.php?Invalid= Please enter correct username and password");
        }
    }
  }
?>
