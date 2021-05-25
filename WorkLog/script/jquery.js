
$(document).ready(function(){

// *****************************************************************users.php*********************************************************
  infoContent();
  function infoContent(){
    var x = document.querySelectorAll(".info");
    var empty = true;
    for(var i=0; i<x.length; i++){
      if(x[i].textContent == ""){
        empty = true;
      }
      else{
        empty = false;
        break;
      }
    }
    if(empty){
      $("#Theader").html('<th scope="col" class="col-1 float-left">Username</th><th scope="col" class="col-11 float-left">Privelage</th>');
    }else{
      $("#Theader").html('<th scope="col" class="col-1 float-left">Username</th><th scope="col" class="col-1 float-left">Privelage</th><th scope="col" class="col-10 float-left">User info</th>');
    }
  }

  $("button").click(function(e){
    var userId = $(this).val();
    var idClicked = e.target.id;
    var strid="#"+userId;
    if(idClicked == "more"){

      if($(strid).html()==""){
        $.ajax({
          type: "POST",
          url:"view/getUserData.php",
          data: {id:userId},
          success:function(response){
          $(strid).html(response);
          $("#Theader").html('<th scope="col" class="col-1 float-left">Username</th><th scope="col" class="col-1 float-left">Privelage</th><th scope="col" class="col-10 float-left">User info</th>');
          },
          error: function (jqXhr, textStatus, errorMessage) { // error callback
            $('#info').html('Error: ' + errorMessage);
          }
        });}else{
          $(strid).html("");
        }
      infoContent();
    }

    else if(idClicked == "privelage"){
      $.ajax({
       url:"functions/setPrivelage.php",
       method:"POST",
       data:{id:userId},
       success:function(result)
       {
        location.reload();
       }
      });
    }
    else if(idClicked == "delete"){
      if(confirm("Are you sure you want to delete user?")){
        $.ajax({
          url: "functions/delete.php",
          type: "POST",
          data: {userId, userId},
          success:function(response){
            console.log(response);
            $("#id"+userId).remove();
          }
        });
      }
    }
  });

  // **************************************************************logwork.php********************************************************************
  loadData();
  function loadData(){
    $.ajax({
      type:"POST",
      url: "view/getWorkLog.php",
      success:function(response){
        $("#workLog").html(response);
      }
    })
  }

  $("#workLog").on("click", "#edit",function(e){
    var data1 = $(this).val();
    $.ajax({
      type:"POST",
      url: "view/getLog.php",
      data: {data1:data1},
      dataType: 'json',
      success:function(response){
        $("#start").val(response.start);
        $("#end").val(response.end);
        $("#date").val(response.date);
        $("#opis").html(response.opis);
        $("#hoursId").val(data1);
      }
    });


  });

});
