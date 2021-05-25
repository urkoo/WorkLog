<?php
session_start();
include_once("../configs/connect.php");
if(isset($_SESSION['userId'])){
  $userId = $_SESSION["userId"];
  $sql = "SELECT * FROM wHours where userId = $userId";

  $result = $mysqli->query($sql);

  $output=null;

  if ($result->num_rows > 0) {
      $output .= "<table class='table table-borderless'>
                    <thead>
                      <tr>
                        <th scope='col'>start</th>
                        <th scope='col'>end</th>
                        <th scope='col'>date</th>
                        <th scope='col'>Last modified</th>
                      </tr>
                    </thead>
                  </table>";
      while($row = $result->fetch_assoc()){
        $opis = $row['opis'];
        $output .= "<div class=''>
                      <div class='col-lg'>
                        <button id='infobut' type='button' class='infobut btn  w-100 my-1' data-toggle='collapse' data-target='#u".$row["hoursId"]."'  aria-expanded='false' aria-controls='#u".$row["hoursId"]."'>
                          <div class='table-responsive'>
                            <table class='table table-borderless'>
                              <tr id='".$row['userId']."'>
                                <td>".$row['start']."</td>
                                <td>".$row['end']."</td>
                                <td>".$row['date']."</td>
                                <td>".$row['modified']."</td>
                                <td>
                                  <button value='".$row['hoursId']."' id='edit' type='button' class='but btn btn-light' data-toggle='modal' data-target='#exampleModalCenter'>
                                    <i class='fas fa-edit float-left'></i>
                                  </button>
                                </td>
                              </tr>
                            </table>
                            <hr>
                            <div id='u".$row["hoursId"]."' class='collapse'>
                              <div class='float-left text-dark'>
                                <span>$opis</span>
                              </div>
                            </div>
                          </div>
                        </button>
                      </div>
                    </div>";
      }
    }
    else{
      echo "No data found";
    }
  echo $output;
}

?>
