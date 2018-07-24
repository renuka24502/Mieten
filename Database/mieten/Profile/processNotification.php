<?php
//EDIT THE DATABASE TABLE with 2 columns Namely CompanyName and CompanyDetails
   $con=mysqli_connect('localhost','root','','mieten') or die('Failed to connect to MySQL.');
   if(isset($_POST['name']) && isset($_POST['notification']))
	{
		$username = $_POST['name'];
		$notification = $_POST['notification'];
		
		$Sql_Query = "UPDATE info set Notification = '".$notification."' where Name = '".$username."'";
   
		   if(mysqli_query($con,$Sql_Query)){
				echo 'Notification has been pushed to the user !';
		   }
		   else{
				echo 'Please check whether the user entered is correct !';
			} 
		//echo "Connection is Successful!";
		//echo $notification;
   }
   else
   {
		echo "NOT A POST REQUEST :P";
	}	
   mysqli_close($con);
?>