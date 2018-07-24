<?php
//EDIT THE DATABASE TABLE with 2 columns Namely CompanyName and CompanyDetails
   $con=mysqli_connect('localhost','root','','mieten') or die('Failed to connect to MySQL.');
   if(isset($_POST['index']) && isset($_POST['answer']))
   {
		$index = $_POST['index'];
		$answer = $_POST['answer'];
		
		$Sql_Query = "update faq set Answer = '".$answer."' where Id = ".$index."";
   
		   if(mysqli_query($con,$Sql_Query)){

				echo 'Your answer has been successfully submitted !';
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