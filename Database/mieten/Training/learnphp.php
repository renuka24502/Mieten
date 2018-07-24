<?php
			$con = mysqli_connect('localhost', 'root', '', 'mieten');
			//$query=mysqli_select_db($con,'training');
			if($con)
			{
				$c = "SELECT * from training";
				$result = mysqli_query ($con, $c);

				//response array
				$response = array();

				$response['error'] = false;

				$response['message'] = "PDfs fetched successfully.";

				$response['pdfs'] = array();

				//traversing through all the rows

				while($row =mysqli_fetch_array($result)){
				    $temp = array();
				    $temp['id'] = $row['id'];
				    $temp['url'] = $row['url'];
				    $temp['name'] = $row['name'];
				    array_push($response['pdfs'],$temp);
				}

				echo json_encode($response);
			}
			else
				echo (mysqli_error($con));
?>
