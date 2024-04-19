<?php
    include("connect.php");

    if($con->connect_error){
        die("connection failed: " . $con->connect_error);
    }

    $targetDir = "uploads/";

    if(isset($_FILES['file']) && $_FILES['file']['error'] === 0){
        $fileName = basename($_FILES["file"]["name"]);
        $targetPath = $targetDir . $fileName;

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)){
            $sql = "INSERT INTO registration(fileName, filepath) VALUES ('$fileName', '$targetPath')";
            if($con->query($sql) == true){
                echo"File uploaded and saved to Database";
            }else{
                echo "Error: ".$sql. "Error Details: ".$con->error;            
            }
        }else{
            echo "Error Moving the file";
        }
    }else{
       echo "";
    }
    // $con->close();
?>