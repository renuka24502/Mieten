<?php
//EDIT THE DATABASE TABLE with 2 columns Namely CompanyName and CompanyDetails

   $con=mysqli_connect('localhost','root','','mieten') or die('Failed to connect to MySQL.');

   if(isset($_POST['name']))				
	   //&& isset($_POST['details']))
   {
		$compname = $_POST['name'];
		$compdetails = $_POST['details'];
		
		$Sql_Query = "INSERT into table1(CompanyName,CompanyDetails) values('".$compname."','".$compdetails."')";
   
		   if(mysqli_query($con,$Sql_Query)){

				echo 'Data Submit Successfully to the database';
		   }
		   else{
				echo 'Try Again';
			}
   }
   else
   {
		echo "NOT A POST REQUEST :P";
	   
   }	
   mysqli_close($con);
?>