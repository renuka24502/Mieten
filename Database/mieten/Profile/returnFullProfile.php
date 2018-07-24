<?php
//EDIT THE DATABASE TABLE with 2 columns Namely CompanyName and CompanyDetails
   $con=mysqli_connect('localhost','root','','mieten') or die('Failed to connect to MySQL.');
   
   if(isset($_POST['name']))
   {
		$name = $_POST['name'];
		
		
		$Sql_Query = "Select * from info where Name like '".$name."'";
		
		$d = mysqli_query ($con, $Sql_Query);
		if ($d) {
				$rows = array();
				while($r = mysqli_fetch_assoc($d)){
					$rows[] = $r;
			
			
			}	
				
			echo json_encode($rows);
			}
			else {
				echo 'TRy Again T_T'; 
			}   



   }
   else
   {
		echo "NOT A POST REQUEST :P";
	   
   }	
   mysqli_close($con);
?>
