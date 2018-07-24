/*
        //getting name from the request
        $name = $_POST['name'];

        //getting file info from the request
        $fileinfo = pathinfo($_FILES['file']['name']);

        //getting the file extension
        $extension = $fileinfo['extension'];

        //file url to store in the database
        $file_url = $upload_url . getFileName() . '.' . $extension;

        //file path to upload in the server
        $file_path = $upload_path . getFileName() . '.'. $extension;

        //trying to save the file in the directory
        try{
            //saving the file
            move_uploaded_file($_FILES['file']['tmp_name'],$file_path);
            $sql = "INSERT INTO `pdf` (`url`, `name`) VALUES ('$file_url', '$name');";

            //adding the path and name to database
            if(mysqli_query($con,$sql)){

                //filling response array with values
                $response['error'] = false;
                $response['url'] = $file_url;
                $response['name'] = $name;
            }
            //if some error occurred
        }catch(Exception $e){
            $response['error']=true;
            $response['message']=$e->getMessage();
        } 
        //closing the connection
        mysqli_close($con);
    }else{
        $response['error']=true;
        $response['message']='Please choose a file';
    }
    
    //displaying the response
    echo json_encode($response);
*/
}

/*
We are generating the file name
so this method will return a file name for the image to be upload
*/
function getFileName(){
    $con = mysqli_connect('sql308.epizy.com','epiz_20973373','Rishabhkandoi','epiz_20973373_training') or die('Unable to Connect...');
    $sql = "SELECT max(`id`) as id FROM `pdf`";
    $result = mysqli_fetch_array(mysqli_query($con,$sql));

    mysqli_close($con);
    if($result['id']==null)
        return 1;
    else
        return ++$result['id'];
}