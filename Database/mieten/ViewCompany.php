<?php

 $db_name = "mieten";  
 $mysql_user = "root";  
 $mysql_pass = "";  
 $server_name = "localhost";  

 $conn = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);  


if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM table1";
$result = $conn->query($sql);

if ($result->num_rows >0) {
 
 while($row[] = $result->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);
 
 
 }
 
} else {
 echo "0 results";
}
 echo $json;
$conn->close();
?>
