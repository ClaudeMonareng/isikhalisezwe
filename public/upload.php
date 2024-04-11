<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        //Check if a file was uploaded without errors
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
            $target_dir = "isikhalisezwe/public/uploads"; // Change this to the desired directory for uploaded files
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if the file is allowed (You can modify this to allow specific file types)
            $allowed_types = array("jpg", "jpeg", "png", "gif", "pdf");
            if(!in_array($file_type, $allowed_types)){
                echo "Sorry, only JPG, JPEG< PNG< GIF and PDF are allowed";
            }else{
                // Move the uploaded file to the specified directory
                if(move_uploaded_file($_FiLES["file"]["tmp_name"], $target_file)){
                    // File uploaded successfully, now store information in the database
                    $filename = $_FILES["file"]["name"];
                    $filesize = $_FILES["file"]["size"];
                    $filetype = $_FILES["file"]["type"];

                    // Database connection
                    $db_host = "localhost";
                    $db_user = "root";
                    $db_pass = "HSMQTQwpj247!";
                    $db_name = "isikhalisezwe";

                    $con = new mysqli($db_host, $db_user, $db_pass, $db_name);

                    if ($con->connect_error){
                        die("Connection failed: ". $con->connect_error);
                    }

                    // Inserting the file information into the database
                    $sql = "INSERT INTO registration(filename, filesize, filetype) VALUES ('$filename', '$filesize', '$filetype')";

                    if ($con->query($sql)=== true){
                        echo "The file " . basename($_FILES["file"]["name"]). " has been uploaded and the information has been stored in the database.";
                    }else{
                        echo"Sorry, there was an error uploading your file and storing information in the database: ". $con->error;
                    }
                    $con->close();
                }else{
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }else{
            echo "No file was uploaded.";
        }
    }
?>