<?php

//this is our upload folder
$upload_path = 'uploads/';

//creating the upload url
$upload_url = 'http://'.'192.168.43.36/'.$upload_path;

//response array
$response = array();


if($_SERVER['REQUEST_METHOD']=='POST'){

    //checking the required parameters from the request
    

        //connecting to the database
        $con = mysqli_connect('localhost','root','','table1') or die('Unable to Connect...');
		$name = "rishabh";
		$url = "hello";
		$sql = "insert into `pdf` (`name`, `url`) values ($name, $url)";
		mysqli_query ($sql);
		mysqli_close ($con);
	
}