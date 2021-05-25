<?php
function getUsers(){
  include("configs/connect.php");

  $output = null;
  $sql = "SELECT * FROM users";

  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
    $output .= '<div class="table-responsive w-100" >
                    <table class="table  table-hover">
                       <thead>
                         <tr id="Theader" class="table">
                           <th scope="col" class="col-1 float-left">Username</th>
                           <th scope="col" class="col-11 float-left">Privelage</th>
                       </thead>
                       <tbody>';

    while($row = $result->fetch_assoc()) {
      if($_SESSION['userId'] != $row['userId']){
       // echo '<li class="list-group-item">"'.$row['ime'].'"</li>';
       $output .= '
                      <tr class="d-flex" id="id'.$row['userId'].'">
                        <td class="col-1">'.$row['username'].'</td>';

        if($row['isAdmin'] == 0){
          $output .= '<td class="col-1"> User </td>';
        }
        else{
          $output .= '<td class="col-1 "> Admin </td>';
        }

        $output .= '<td class="col-6 font-italic">
                      <div class="info" id="'.$row['userId'].'" data-id="'.$row['userId'].'"></div>
                    </td>';
        $output .='<td class="col-4">
                    <div class="btn-group float-sm-right" role="group" arial-label="First group">';

        if($row['isAdmin'] == 0){
            $output .= '<button type="button" class="btn btn-dark float-right ml-10 btn-sm" value="'.$row['userId'].'" id="privelage">Add privelages</button>';
        }
        else{
            $output .= '<button type="button" class="btn btn-dark float-right ml-10 btn-sm" value="'.$row['userId'].'" id="privelage">Take privelages</button>';
        }

        $output .= '<button class="btn btn-danger float-right ml-10 btn-sm" value="'.$row['userId'].'" id="delete">Delete</button>
                  </div>
                  <div class="btn-group float-sm-right" role="group" arial-label="Second group">
                    <button class="btn btn-link float-right ml-10 btn-sm" value="'.$row['userId'].'" id="more">More...</button>
                  </div>
                </td>
               </tr>';
      }
    }
    $output .= '</tbody>
              </table>
            </div>';
  } else {
    printf('No record found.<br />');
    // return null;
  }
  echo $output;
  mysqli_free_result($result);
  mysqli_close($mysqli);
  // return $output;
}
?>
