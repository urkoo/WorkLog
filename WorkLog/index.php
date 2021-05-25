<?php
session_start();
if(!isset($_SESSION['username2'])){
  echo("<script>location.href = 'view/login.php?Invalid= You have to login first';</script>");
}
var_dump($_SESSION);
include_once("configs/userses.php");
?>
<html>
    <head>
      <meta charset="UTF-8">
      <!-- jquey -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!-- <link rel="icon" href="Images/marema.png"> -->
      <link rel="stylesheet" type="text/css" href="styles/indexstyle.css?version=7">
    </head>
    <body>
      <div>
        <div class=" header topnav fixed-top">
          <a class="active" href='index.php'> Profile </a>
          <a href='logwork.php'> LogWork </a>
          <?php
            if($_SESSION['isAdmin']==TRUE){
              echo "<a href='users.php'> Manage users</a>";
            }
          ?>
          <div class="logout">
            <a href='functions/logout.php?logout'> Logout </a>
          </div>
        </div>
        <div class="user fixed-top border border-secondary">
          <?php
            if($_SESSION['isAdmin']==TRUE){
              echo "<h4><p>Admin Data:</h4></p>";
            }
            else{
              echo "<h4><p>Profile Data:</h4></p>";
            }
          ?>
          <p>Username: <?php echo $_SESSION['username']?></p>
          <p>Name: <?php echo $_SESSION['name']?></p>
          <p>Surname: <?php echo $_SESSION['surname']?></p>
          <p>email: <?php echo $_SESSION['email']?></p>
          <p>phone number: <?php echo $_SESSION['phone']?></p>
        </div>
      </div>
    </body>
</html>
