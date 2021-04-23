<?php
session_start();
  include_once("connect.php");
  if(isset($_POST['login'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        mysqli_close($conn);
        echo("<script>location.href = 'login.php?Empty= Please Fill in the blanks';</script>");
    }
    else{
        $query="select * from users where username='".$_POST['username']."' and password='".$_POST['password']."'";
        $result=mysqli_query($conn, $query);

        if(mysqli_fetch_assoc($result)){
            $_SESSION['username']=$_POST['username'];
            mysqli_close($conn);
            echo("<script>location.href = 'index.php';</script>");
        }
        else{
            mysqli_close($conn);
            echo("<script>location.href = 'login.php?Invalid= Please enter correct username and password';</script>");
        }
    }
  }
  else if(isset($_POST['register'])){
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['name']) || empty($_POST['surname'])){
        mysqli_close($conn);
        echo("<script>location.href = 'register.php?Empty= Please Fill in the blanks';</script>");
    }
    else{
        $query="select username, DS from users where username='".$_POST['username']."' or DS='".$_POST['ds']."';";
        $result=mysqli_query($conn, $query);
        if(mysqli_fetch_assoc($result) != NULL){
          mysqli_close($conn);
          echo("<script>location.href = 'register.php?Empty= This username or DS already exists';</script>");
        }
        else{
          $query="insert into users (username, password, ime, priimek, DS, email, telSt)
                  values ('".$_POST['username']."','".$_POST['password']."','".$_POST['name']."','".$_POST['surname']."','".$_POST['ds']."','".$_POST['email']."','".$_POST['phone']."');";

          $result=mysqli_query($conn, $query);
          if($result){
              $_SESSION['username']=$_POST['username'];
              mysqli_close($conn);
              echo("<script>location.href = 'index.php';</script>");
          }
          else{
              mysqli_close($conn);
              echo("<script>location.href = 'register.php?Invalid= Something went wrong';</script>");

          }
        }
    }
  }
?>
