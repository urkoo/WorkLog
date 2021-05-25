<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../styles/login.css">
<title>Login</title>
</head>

<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <?php
      if(@$_GET['Empty']==True){
     ?>
      <div class="alert-light text-danger"><?php echo $_GET['Empty'] ?>
     <?php
      }
     ?>

     <?php
       if(@$_GET['Invalid']==True){
      ?>
       <div class="alert-light text-danger"><?php echo $_GET['Invalid'] ?>
      <?php
       }
      ?>
    <!-- Login Form -->
    <form action="../configs/process.php" method="POST">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="login" name="login">
      <p>Not yet registered? Click here to <a href="register.php">Register</a></p>
    </form>

  </div>
</div>
</body>
</html>
