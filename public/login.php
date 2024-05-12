<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="container">
            <div class="box form-box">

                <?php

                    include("connect.php");
                    if(isset($_POST['submit'])){
                        $username = mysqli_real_escape_string($con, $_POST['username']);
                        $password = mysqli_real_escape_string($con, $_POST['password']);

                        $result = mysqli_query($con, "SELECT * FROM users WHERE Username='lehlohonolomonareng@yahoo.com' AND Password='HSMQTQwpj248!' ") or die("Select Error");
                        $row = mysqli_fetch_assoc($result);

                        if(is_array($row) && !empty($row)){
                            $_SESSION['username'] = $row['Username'];
                            $_SESSION['password'] = $row['Password'];
                        }else{
                            echo    "<div class='message'>
                                        <p>Wrong Username or Password </p>
                                    </div><br>";
                            echo    "<a href='login.php'><button class='btn'>Go Back</button>";
                        }
                        if(isset($_SESSION['valid'])){
                            header("Location: index.php");
                        }
                    }else{       

                ?>

                <header>Login Page</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password">
                    </div>
                    <div class="field">
                        <input type="submit" name="submit" class="btn" value="Login">
                    </div>
                </form>
            </div>
            <?php } ?>
        </div>
    </body>
</html>