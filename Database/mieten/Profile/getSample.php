<?php
   
    $db_name = "mieten";  
    $mysql_user = "root";  
    $mysql_pass = "";  
    $server_name = "localhost";

	$con=mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name) or die('Failed to connect to MySQL.');
   
	if(isset($_GET['name'])){
		$studentname = $_GET['name'];
	}
	else $studentname = "renuka";	
	
	$query = "SELECT * FROM info where Name like '%".$studentname."%'";
	$result = mysqli_query($con , $query);
	//$num = mysql_num_rows($result);
	
	if(!$result){
		die(mysqli_error());
	}		
	else {	
		while($row = mysqli_fetch_array($result)) {
			
			//echo "Company Id: ".$row['CompanyId']."<br>Company Name : " . $row['CompanyName']."<br>Comany Details : " . $row['CompanyDetails']."<br>" ;
			echo json_encode($row);
		}
		
		//echo "Fetched Data Correctly\n";
	}	
	
	
	//if ($result->num_rows > 0) {
    // output data of each row
	
	
	mysqli_close($con);
?>
