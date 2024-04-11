<?php

    include("connect.php");

    if($con->connect_error){
        die("Connection failed: ". $con->connect_error);
    }

    //  Fetch the upload files from the database

    $sql = "SELECT * FROM files";
    $result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" ></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Uploaded Files</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th>File Type</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <?php

                //Display the uploaded files and download links
                if($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()){
                        $file_path = "uploads/" . $row['filename'];
                        ?>
                        <tr>
                            <td><?php echo $row['filename']; ?></td>
                            <td><?php echo $row['filename']; ?> bytes</td>
                            <td><?php echo $row['filename']; ?></td>
                            <td><a href="<?php echo $file_path; ?>" class="btn btn-primary">Download</a></td>
                        </tr>
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
</body>
</html>