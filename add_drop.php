<!DOCTYPE html>
<html>
<head>
<title>Add Drop</title>
<style>

	.main-nav
{  
	
	padding: 300px;
    float: center;
    text-align: center;
    font-size: 20px;   
   font-family: "Calibri", Times, serif;
   font-weight: bold;

}
*{

	margin: 0;
	padding: 0;


}

header  {

	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
	height: 100vh;
	background-size: cover;
	background-position: center;
}

.button {
    -webkit-border-radius: 18;
  -moz-border-radius: 18;
  border-radius: 18px;
  font-family: Arial;
  color: #ffffff;
  font-size: 17px;
  padding: 10px;
  background: #000000;
  text-decoration: none;	
  cursor: pointer;
}

.button:hover {
  background: #615461;
  text-decoration: none;
}

</style>


</head>

<header>

<div class="row">
<ul class="main-nav">
	<h1>Add Drop Slot</h1><br><br>
 <form action="test.php" method="post">
 

 Select:&nbsp;&nbsp;&nbsp;<select type="text" name="ad_dr">
  <option value="Add">Add</option>
  <option value="Drop">Drop</option>
</select>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type:&nbsp;&nbsp;&nbsp;<select type="text" name="Type">
  <option value="car">Car</option>
  <option value="carlarge">Car Large</option>
  <option value="bike">Bike</option>
</select> 
<br><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Starting Slot: <input type="text" name="Start" required><br><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ending Slot: <input type="text" name="End" required><br><br>
 <button class="button" type="submit"  value="Submit">Submit</button>

</form>

	</ul>

</div>
</header>

</html>