

<?php

include("include/connection.php");
$message=$_POST['text'];
$query="INSERT INTO live_session_message VALUES('','".$message."')";


$quer_run=mysqli_query($con,$query);
?>