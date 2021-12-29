<?php

    $originalFileName = $_FILES["fileUploaded"]["name"];
    $fileExtension = substr($originalFileName,-4); // it's like --> .jpg or .png or .gif 
    $fileName = rand(1111,9999999)."-".rand(1111,9999999).$fileExtension; // the file name is going to be like "123123-654644.jpg"
    $maxFileSize = 2048000; // it's 2048 KB and 2 MB
    $filePath = "images/".$fileName;

    if($_FILES["fileUploaded"]["size"] < $maxFileSize){
        
        $fileType = $_FILES["fileUploaded"]["type"];
        if($fileType == "image/jpg" || $fileType == "image/jpeg" || $fileType == "image/png" || $fileType == "image/gif"){

            if(is_uploaded_file($_FILES["fileUploaded"]["tmp_name"])){

                $moveFile = move_uploaded_file($_FILES["fileUploaded"]["tmp_name"],$filePath);
                if($moveFile){
                    echo "The file is uploaded. <br/>";
                    echo "<img width='50%' src='".$filePath."'/>";
                }
                else{
                    echo "The file is not an uploadable file.";
                }
            }
            else{
                echo "The file is not an uploadable file.";
            }
        }
        else{
            echo "The file type has to be jpg/jpeg, png, or gif.";
        }
    }
    else{
        echo "The file size is too big!";
    }
    

?>