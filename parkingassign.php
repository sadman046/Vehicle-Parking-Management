
<!DOCTYPE html>
<html>
<head>
<title>Customer Entry</title>
<link rel="stylesheet" type="text/css" href="CSS/parkingassign.css">

</head>

<header>

<div class="row">
<ul class="main-nav">
	<?php
	session_start();
	$num2 = $_SESSION['slot'];
	echo '<div style="font-size:2em;color:green">Parking Slot Assigned: '.$num2.'</div>';
	
	echo '<br>';
	

	 ?>

<form>
	</form>
<input class="MyButton" type="button" value="Customer Home" onclick="window.location.href='index.php'" />
</form>





</ul>



</div>

</header>


</html>
