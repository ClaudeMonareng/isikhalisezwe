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
                <header>Login Page</header>
                <form action="login.php" method="post">
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
            <?php 
                if(isset($_POST["submit"])){

                    if(!empty($_POST["username"]) && !empty($_POST["password"])){

                        $_SESSION["username"] = $_POST["username"];
                        $_SESSION["password"] = $_POST["password"];

                        header("Location: index.php");
                    }else{
                        echo"Missing username/password <br>";
                    }
                }
            ?>
        </div>
    </body>
</html>