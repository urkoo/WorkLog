<?php
include_once("../configs/connect.php");
if(isset($_POST['data1'])){
  $hoursId=$_POST['data1'];
  $sql = "SELECT * FROM wHours where hoursId = $hoursId";

  $result = $mysqli->query($sql);
  $output = [];
  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    foreach ($row as $key => $value) {
        $output[$key]=$value;
    }
    echo json_encode($output);
  }
  else{
    echo "Napaka";
  }
}else{
  echo "Napaka2";
}
?>
