<?php
			$con = mysqli_connect('localhost', 'root', '', 'mieten');
			
			if($con)
			{
				$c = "SELECT * 	from faq";
				$d = mysqli_query ($con, $c);
				if ($d) {
					$rows = array();
					while($r = mysqli_fetch_assoc($d)){
						$rows[] = $r;
					}
					
					echo json_encode($rows);
				}
				else{
					echo 'TRy Again T_T'; 
				}
			}
			else
				echo (mysqli_error($con));
			mysqli_close($con);
?>
