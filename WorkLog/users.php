<?php

session_start();

if(!isset($_SESSION['username2'])){

  echo("<script>location.href = 'view/login.php?Invalid= You have to login first';</script>");

}

include_once("configs/userses.php");
include_once("functions/functions.php");
?>

<html>

    <head>

      <meta charset="UTF-8">

      <!-- jquey -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>

      <!--my scripts -->
      <script src="script/jquery.js"></script>
      <link rel="stylesheet" type="text/css" href="styles/indexstyle.css?version=5">

    </head>
    <body>

        <header class=" header topnav">
            <a href='index.php'> Profile </a>
            <a href='logwork.php'> LogWork </a>
            <?php
                if($_SESSION['isAdmin']==True){
                  echo "<a class='active' href='users.php'> Manage users</a>";
                }
            ?>
            <div class="logout">
                <a href='functions/logout.php?logout'> Logout </a>
            </div>
        </header>

        <section class="section1">
            <div class="px-20">
                <div class="row">
                    <?php getUsers(); ?>
                </div>
                  </ul>
                </div>
            </div>
        </section>

    </body>

</html>
