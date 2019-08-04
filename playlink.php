<?php
SESSION_START();
$link=$_SESSION['link'];
//$name=$_SESSION['name'];

include("include/connection.php");
    
    if(isset($_POST['decline'])){
      $decline = "DELETE session_link from user where link='$link' ";
      $run = mysqli_query($con, $decline);
    if($run){
        header("location: http://localhost:8081/virtual-mentor/mentor-home.php");
      }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<div class="modal bg-dark" id="caller_modal" data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body text-center">
        <h4 class="modal-title">Phone Call</h4>
        <p>Pik_up the call</p>
        <hr class="w-50">
        <form method="POST">
        <button type="button" name="decline" class="btn btn-danger">Decline</button>
        <a href="<?php echo $link;?>" type="button" class="btn btn-success">Answer</a>
        </form>
      </div>
      
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#caller_modal').modal('show');
    });
</script>


</body>
</html>