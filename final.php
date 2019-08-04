<?php
session_start();
include("include/connection.php");
//////////////submit the link in database 
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(isset($_POST['call'])){
$name=$_POST['name'];
$_SESSION['name']=$name;

$hash=$_SESSION['url'];
$url=$url.$hash;

$sql= "UPDATE user SET session_link='$url' WHERE name='$name' ";
$result = mysqli_query($con, $sql);
if(!$result){
echo "Not Insert ";
  }
}




 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Live session</title>

  <!-- Meta tags for responsiveness -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- ----------------------------------------------- -->

  
  <!-- Bootstrap CSS by CDN  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- ----------------------------------------------- -->

  <!-- Bootstrap Complied CSS (Adding bootstrap Css localy) -->
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">  -->
  <!-- ----------------------------------------------- -->

  <!-- Custom Css -->
  <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
  <!-- ----------------------------------------------- -->

  <!-- Fontawesome kit code -->
  <!-- <script src="https://kit.fontawesome.com/c36645e443.js"></script> -->
  <!-- ----------------------------------------------- -->
  
  <!-- Add ajax CDN link -->
	<script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <!-- ----------------------------------------------- -->	  


    <!--live chat css -->
	<style type="text/css">  
.copy {
      position: fixed;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 16px;
      color: white;
    }


  </style>
 
</head>
<body>
  <!-- Start header bar -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
    <span class="navbar-brand">Virtual Mentor Live Session</span>
  </nav>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">      
  <!--Enter username form-->  
        <form method="POST"> 
            <div class="form-inline text-light">  
              <input type="text" class="form-control bg-dark text-light" name="name" placeholder="User name" >  
            </div>
            <div class="form-inline">  
              <input type="submit" class="btn btn-outline-light btn-sm w-50 mt-1  rounded-0" name="call" id="button" value="call">
              <input type="submit" class="btn btn-danger btn-sm w-50 mt-1 rounded-0" name="desconnect" value="Desconnect">
            </div>       
        </form>  
  <!--End username form  -->
  </nav>
  <!-- End header bar -->

  <!-- Start content area of live cam -->
  <div class="container-fluid my-2">
    <div class="row">
      
      <div class="col-md-8 col-sm-12">        
          <video id="remoteVideo" autoplay class="bg-info h-100 w-100" ></video>
      </div>

      <div class="col-md-4 col-sm-12 mt-1">
        <video id="localVideo" autoplay muted class="bg-info h-50 w-100" ></video>
        
        <div class="h-50 bg-dark mt-1">
        <div id="i"></div>
        <div class="form-inline justify-content-center" style="position: relative; top: 180px;"> 
          <input type="text" name="message" id="message">
          <button onclick="myfunction()">send</button>
          </div>
      </div>
      
    </div>
    
  	<div id="myDiv"></div>
  	
 <!--Live chat html code-->
   <!--   
    <div id="chat"></div>
    <div id="i">live chat</div>
    	<br>

    <input type="text" name="message" id="message">
    <button onclick="myfunction()">send</button> -->



  <!--video call html code-->
  </div>


  
<script src="script.js"></script>
<script type="text/javascript">
  
  setInterval(function(){
$("#i").load('java.php');
refresh();
},1000);

  $(document).ready(function(){
  $("#button").click(function(){

  var hash=location.hash;
   // document.write(hash);
      $.ajax({
        type:"POST",
        url:"hash.php",
        data:{name:hash},
      })
      .done(function(data){
$("#myDiv").html(data);

      });
});
});
 
   function myfunction(){
    
var message=document.getElementById('message').value;

$.ajax({
method:"post",
url:"new.php",
data:{text:message}
})
.done(function(data){

$("#chat").html(data);

});

   }  </script>



<!-- Bootstrap Complied JS (Adding bootstrap Js localy) -->
<!--  <script src="js/bootstrap/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap/popper.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>  -->
  <!-- ----------------------------------------------- -->


  
</body>
</html>
