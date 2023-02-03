<?php
$servername="localhost";
$username = "root";
$password ="";
$dbname = "carparking";
$conn = new mysqli ($servername, $username, $password, $dbname);

$VN=$_POST['VehicleNumber'];
$PN=$_POST['PIN'];

$tax=time();
session_start();

	$show=" SELECT * FROM customer Where VehicleNumber='$VN' AND PIN='$PN'";
	$result = mysqli_query($conn,$show);
	
	if($rows = mysqli_fetch_array($result))
	{	
		$numm = $rows ['ParkingSlot'];
		$check = $rows ['Type'];
		$real= $rows ['PintTime'];
		if($check == 'Car')
		{
			
			$copy = " INSERT INTO customerrecord (Type,VehicleNumber,ContactNUmber,PIN,ParkingSlot,PintTime,ParkingTime)  SELECT * FROM customer Where VehicleNumber='$VN' ";
	        $conn->query($copy);

	        $costt = "UPDATE customerrecord  SET EintTime=$tax, Cost=round (30+((($tax-PintTime)/3600)*60)) Where  VehicleNumber='$VN'";	  
	        $conn->query($costt);
	        $taka ="SELECT Type, Cost From customerrecord Where VehicleNumber='$VN' and Type='Car' and PintTime= '$real'";
	        $re = mysqli_query($conn,$taka);
	        $r = mysqli_fetch_array($re);
	        $one=$r ['Cost'];
	     
	        $_SESSION['cost'] = $one;
	         
	        
	        $upd = "UPDATE car  SET slot=0 Where CarSlot='$numm'";
	        $conn->query($upd);    
	    
	        $delete = "DELETE FROM customer Where VehicleNumber='$VN'";
		    $conn->query($delete);
		    
    		
		    header("location:carexit.php");
		}
	else if($check == 'Car Large') 
		{
			$copy2 = " INSERT INTO customerrecord (Type,VehicleNumber,ContactNUmber,PIN,ParkingSlot,PintTime,ParkingTime)  SELECT * FROM customer Where VehicleNumber='$VN' ";
	        $conn->query($copy2);

	        $costt2 = "UPDATE customerrecord  SET EintTime=$tax, Cost=round(40+((($tax-PintTime)/3600)*100)) Where  VehicleNumber='$VN'";
	        $conn->query($costt2);
	         $taka ="SELECT Cost From customerrecord Where VehicleNumber='$VN' and Type='Car Large' and PintTime= '$real' ";
	        $re = mysqli_query($conn,$taka);
	        $r = mysqli_fetch_array($re);
	        $one=$r ['Cost'];

	     
	        $_SESSION['cost'] = $one;
	        
	        $upd2 = "UPDATE carlarge  SET Lslot=0 Where CarLSlot='$numm'";
	        $conn->query($upd2);    
	    
	        $delete2 = "DELETE FROM customer Where VehicleNumber='$VN'";
		    $conn->query($delete2);
		    header("location:carexit.php");

		}
	else if($check =='Bike')
	   {
		    $copy3 = " INSERT INTO customerrecord (Type,VehicleNumber,ContactNUmber,PIN,ParkingSlot,PintTime,ParkingTime)  SELECT * FROM customer Where VehicleNumber='$VN' ";
	        $conn->query($copy3);

	        $costt3 = "UPDATE customerrecord  SET EintTime=$tax, Cost=round(10+((($tax-PintTime)/3600)*40)) Where  VehicleNumber='$VN'";
	        $conn->query($costt3);
	        session_start();
    		 $taka ="SELECT Cost From customerrecord Where VehicleNumber='$VN' and Type='Bike' and PintTime= '$real'";
	        $re = mysqli_query($conn,$taka);
	        $r = mysqli_fetch_array($re);
	        $one=$r ['Cost'];
	        $_SESSION['cost'] = $one;
	        
	        $upd3 = "UPDATE bike  SET Bslot=0 Where BikeSlot='$numm'";
	        $conn->query($upd3);   
	    
	        $delete3 = "DELETE FROM customer Where VehicleNumber='$VN'";
		    $conn->query($delete3);
		    header("location:carexit.php");

			
	   }
			

			
	}
	else
		header("location:invalididpin.php");

$conn->close();
?>