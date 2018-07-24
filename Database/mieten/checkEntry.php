<?php
$con=mysqli_connect("localhost","root","","table1");


//$compname = $_POST['name'];
//$compdetails = $_POST['details'];
$compname = 'Bumboo';
$compdetails = 'Acsadmfdsl';
$revcompdetails ='haoshfodshfohsdoi';

$check = "SELECT * FROM table1 WHERE CompanyName = '".$compname."' AND CompanyDetails = '".$compdetails."'";

$rs = mysqli_query($con,$check);
	
if ( mysqli_num_rows ( $rs ) > 0 ){
        	echo "User Already in Exists and table updated<br/>";
	$Sql_Query = "UPDATE table1 SET CompanyDetails = '".$revcompdetails."' WHERE CompanyName ='".$compname."'";
}

else
{
	$Sql_Query = "INSERT into table1(CompanyName,CompanyDetails) values('".$compname."','".$compdetails."')";
}    

if(mysqli_query($con,$Sql_Query)){

	echo 'Data Submit Successfully to the database';
}
else{
	echo 'Try Again';
}

?>