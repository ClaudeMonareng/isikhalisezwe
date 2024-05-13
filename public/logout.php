<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <form action="login.php" method="post">
            <input type="submit" name="logout" value="logout">
        </form>
        <?php
            if(isset($_POST["logout"])){
                session_destroy();
                header("Location: index.php");
            }
        ?>
    </body>
</html>