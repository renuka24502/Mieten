<?php
//EDIT THE DATABASE TABLE with 2 columns Namely CompanyName and CompanyDetails
   $con=mysqli_connect('localhost','root','','mieten') or die('Failed to connect to MySQL.');
   if(isset($_POST['user']) && isset($_POST['password']))
	{
		$username = $_POST['user'];
		$password = $_POST['password'];
		
		$Sql_Query = "select * from info where UserName = '".$username."' and Password = '".$password."'";
		$d = mysqli_query($con,$Sql_Query);
   
		   if($d){
				$e = mysqli_num_rows($d);
				
				echo $e;
		   }
		   else{
				echo 'Try Again';
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