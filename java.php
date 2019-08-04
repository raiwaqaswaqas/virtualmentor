<?php

include("include/connection.php");
$quer="SELECT * FROM live_session_message";
if($quer_e=mysqli_query($con, $quer)){
while($query_fetc=mysqli_fetch_assoc($quer_e)){
echo  "<div style='color:white;'>".$query_fetc['message']."<br>";
}

}
?>