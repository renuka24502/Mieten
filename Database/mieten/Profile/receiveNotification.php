<?php
//EDIT THE DATABASE TABLE with 2 columns Namely CompanyName and CompanyDetails
   $con=mysqli_connect('localhost','root','','mieten') or die('Failed to connect to MySQL.');
   if(isset($_POST['name']))// && isset($_POST['notification']))
	{
		$username = $_POST['name'];
		//$notification = $_POST['notification'];
		
		$Sql_Query = "select Notification from info where Name = '".$username."'";
		$d = mysqli_query ($con, $Sql_Query);
		
		   if($d){
				$fetch = mysqli_fetch_array ($d);
				echo json_encode($fetch);
			}
		   else{
				echo 'Try Again';
			} 
		//echo "Connection is Successful!";
		//echo $notification;
	}
	else
	{
		echo "Sorry Could not get the query.";
	}	
   mysqli_close($con);
?>