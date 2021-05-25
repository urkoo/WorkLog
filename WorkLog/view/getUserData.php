<?php
include_once("../configs/connect.php");

if(isset($_POST['id'])){
  $sql = 'SELECT ime, priimek, DS, email, telSt FROM users where userId = '.$_POST["id"];

  $result = $mysqli->query($sql);

  $output=null;
  if ($result->num_rows > 0) {
    $row=$result->fetch_assoc();
    foreach($row as $key => $value){
      if(isset($value) && !empty($value)){
        echo $key;
        echo ":";
        echo "<b>$value</b>";
        echo " ";
    }
    }
      // var_dump($row);
      // $output .= $row['ime'];

  }
  return $output;
}

?>
