<?php
include('init.php');
 
$Name=$_POST["name"];
//$Name = 'Rishabh';
$Enrollment_no=$_POST["enrollment"];
//$Enrollment_no= '283';
$Batch=$_POST["batch"];
$Phone_no=$_POST["phone"];
$Email=$_POST["email"];
$preferences=$_POST["preferences"];
//$preferences = "Prdslkhfdslhf";


$check = "SELECT * FROM info WHERE Name = '".$Name."' AND Enrollment_no = '".$Enrollment_no."'";

$rs = mysqli_query($con,$check);
	
if ( mysqli_num_rows ( $rs ) > 0 ){
        	echo "User Already in Exists and table updated<br/>";
	$Sql_Query = "UPDATE info SET preferences = '".$preferences."' WHERE Name ='".$Name."'";
}

else
{
	$Sql_Query = "INSERT INTO  `info` (`Name`, `Enrollment_no` ,`Batch`,`Phone_no`,`Email`,`preferences`) 
VALUES ('$Name','$Enrollment_no','$Batch','$Phone_no','$Email','$preferences')";
}    

if(mysqli_query($con,$Sql_Query)){

	echo 'Data Submit Successfully to the database';
}
else{
	echo 'Try Again';
}

?>
