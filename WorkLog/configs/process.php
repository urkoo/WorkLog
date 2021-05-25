<?php
session_start();
include_once("connect.php");

  if(isset($_POST['login'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        mysqli_close($mysqli);
        echo("<script>location.href = '../view/login.php?Empty= Please Fill in the blanks';</script>");
    }
    else{
        $username = mysqli_real_escape_string($mysqli, $_POST['username']);
        $pass = md5(mysqli_real_escape_string($mysqli, $_POST['password']));
        $query="select * from users where username='$username' and password='$pass'";
        $result=$mysqli->query($query);
        if(mysqli_num_rows($result) == 1){
            $row = $result->fetch_row();
            $_SESSION['username2']=$username;
            echo("<script>location.href = '../index.php';</script>");
        }
        else{
            echo("<script>location.href = '../view/login.php?Invalid= Please enter correct username and password';</script>");
            // header("Location: login.php?Invalid= Please enter correct username and password")
        }
    }
  }
  else if(isset($_POST['register'])){

    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['name']) || empty($_POST['surname'])){
        echo("<script>location.href = '../view/register.php?Empty= Please Fill in the blanks';</script>");
    }
    else{
        $username = mysqli_real_escape_string($mysqli, $_POST['username']);
        $pass = md5(mysqli_real_escape_string($mysqli, $_POST['password']));
        $query="select username, DS from users where username='$username' or DS='".$_POST['ds']."';";
        $result=$mysqli->query($query);
        if(mysqli_num_rows($result) == 1){
          echo("<script>location.href = '../view/register.php?Empty= This username or DS already exists';</script>");
        }
        else{
          $query="insert into users (username, password, ime, priimek, DS, email, telSt)
                  values ('$username','$pass','".$_POST['name']."','".$_POST['surname']."','".$_POST['ds']."','".$_POST['email']."','".$_POST['phone']."');";
          $result=$mysqli->query($query);
          if($result){
              $_SESSION['username2']=$_POST['username'];
              echo("<script>location.href = '../index.php';</script>");
          }
          else{
              echo("<script>location.href = '../view/register.php?Invalid= Something went wrong';</script>");
          }
        }
    }
  }
?>
