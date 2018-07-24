<?php
   
	$con=mysqli_connect('localhost','root','','table1') or die('Failed to connect to MySQL.');
   
	if(isset($_GET['name'])){
		$compname = $_GET['name'];
	}
	else $compname = "NIIT Ltd.";	
	
	//$query = "SELECT * FROM table1";
	$query = "SELECT * FROM table1 where CompanyName like '%".$compname."%'";
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