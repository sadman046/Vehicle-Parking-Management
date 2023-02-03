
<!DOCTYPE html>
<html>
<head>
<title>Customer Entry</title>
<link rel="stylesheet" type="text/css" href="css/parkingassign.css">

</head>

<header>

<div class="row">
<ul class="main-nav">
	<?php
	session_start();
	$num = $_SESSION['cost'];
	echo '<div style="font-size:2em;color:green">Vehicle Checked Out  </div>';
	echo '<div style="font-size:1.25em;color:green">You Parking Cost is: '.$num.'</div>';
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
