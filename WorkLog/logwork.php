<?php
session_start();
if(!isset($_SESSION['username2'])){
  echo("<script>location.href = 'view/login.php?Invalid= You have to login first';</script>");
}
include_once("configs/userses.php");
?>
<html>
    <head>
      <meta charset="UTF-8">
      <!-- jquey -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

      <!-- scripts -->
      <link rel="stylesheet" type="text/css" href="styles/indexstyle.css?version=4">
      <link rel="stylesheet" type="text/css" href="styles/style.css?version=9">
      <script src="script/jquery.js"></script>
    </head>
    <body>
        <div class=" header topnav fixed-top">
          <a href='index.php'> Profile </a>
          <a class="active" href='logwork.php'> LogWork </a>
          <?php
            if($_SESSION['isAdmin']==TRUE){
              echo "<a href='users.php'> Manage users</a>";
            }
          ?>
          <div class="logout">
            <a href='functions/logout.php?logout'> Logout </a>
          </div>
        </div>
        <section class="section2">
                <a class="btn btn-outline-dark" data-toggle="collapse" href="#add" role="button" aria-expanded="false" aria-controls="add"><i class="fas fa-calendar-plus"></i> Add log</a>
                <div class="collapse" id="add">
                  <div class="card card-body">

                    <form action="functions/inputWorkLog.php" method="POST" id="addWorkLog">
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputEmail4">Start</label>
                          <input type="time" class="form-control" name="start">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputPassword4">End</label>
                          <input type="time" class="form-control" name="end">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputPassword4">Date</label>
                          <input type="date" class="form-control" name="date">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress">Notes</label>
                        <textarea class="form-control" rows="5" name="opis"></textarea>
                      </div>
                      <button type="submit" class="btn btn-outline-success float-right" name="inputData">Save</button>
                    </form>
                  </div>
                </div>
        </section>
        <section class="section3">
                <div  class="card" id="workLog">
                </div>
        </section>


          <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="functions/updateWorkLog.php" method="POST" id="addWorkLog">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputEmail4">Start</label>
                        <input type="time" class="form-control" id="start" name="start">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">End</label>
                        <input type="time" class="form-control" id="end" name="end">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputPassword4">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Notes</label>
                      <textarea class="form-control" id="opis" rows="5" name="opis"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-success float-right" name="updateData">Save</button>
                    <input type="hidden" id="hoursId" name="hoursId">
                  </form>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>
