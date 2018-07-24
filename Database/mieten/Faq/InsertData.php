<?php

   $con=mysqli_connect('localhost','root','','mieten') or die('Failed to connect to MySQL.');
   if(isset($_POST['name']))
   {
		$question = $_POST['name'];
		//$question = "How are you ?";
		$Sql_Query = "INSERT into faq(Question) values('".$question."')";
			
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