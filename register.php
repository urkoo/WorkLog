<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="login.css?version=1">
<title>Register</title>
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
    <!-- Register Form -->
    <form action="process.php" method="POST">
      <input type="text" id="name" class="fadeIn second" name="name" placeholder="name">
      <input type="text" id="surname" class="fadeIn third" name="surname" placeholder="surname">
      <input type="text" id="username" class="fadeIn third" name="username" placeholder="username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="text" id="ds" class="fadeIn third" name="ds" placeholder="Davčna številka">
      <input type="text" id="email" class="fadeIn third" name="email" placeholder="email">
      <input type="text" id="phone" class="fadeIn third" name="phone" placeholder="phone number">
      <input type="submit" class="fadeIn fourth" value="register" name="register">
      <p>Already registered? Click here to <a href="login.php">Login</a></p>
    </form>

  </div>
</div>
</body>
</html>
