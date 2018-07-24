<?php
//EDIT THE faq database's TABLE having name faq_question with column Name Question
   $con=mysqli_connect('localhost','root','','faq') or die('Failed to connect to MySQL.');
   if(isset($_POST['que']) )
   {
		$student_question = $_POST['que'];
		
   }
	else{
			$student_question = "134253";
	}
	$Sql_Query = "INSERT into faq_question(Question) values('".$student_question."')";
   
		   if(mysqli_query($con,$Sql_Query)){

				echo $student_question.'Submit Successfully to the faq';
		   }
		   else{
				echo 'Try Again';
			}
   
   //else
   //{
	//	echo "NOT A POST REQUEST :P";
	   
   //}	
   mysqli_close($con);
?>