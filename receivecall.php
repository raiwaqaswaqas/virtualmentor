<?php

include("include/connection.php");
include("include/user_data.php");

		



		
echo "<div id='autofresh'>";
  $sql="select session_link from user where email='$user_name'";
   $result = mysqli_query($con, $sql);
if(!$result){
echo "Not Insert " . mysqli_error($con);
  }
  while($row = mysqli_fetch_assoc($result))
  {$link = $row['session_link'];}


echo "</div>";	

$_SESSION['link']=$link;



//} 
?>
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<script type="text/javascript">
	setInterval(function(){
$("#autofresh").load(location.href + " #autofresh");
});
		
</script>
<body>



</body>
</html>
<?php
if ($link!='') {
	require 'playlink.php';
}
?>