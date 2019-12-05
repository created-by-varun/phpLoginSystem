<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

</head>
<body>
    
    <header>
        <nav>
        
<!--Login Form -->

    <?php 
        if(isset($_SESSION['userId'])){
            echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
            </form>';
        } else {
            echo '<form action="includes/login.inc.php" method="post">

            <input type="text" name="mailuid" placeholder="Username/Email..."> <br> <br>
            <input type="password" name="pwd" placeholder="Password"> <br> <br>
            <button type="submit" name="login-submit">Login</button> <br>
            </form>
            <br>
            <a href="signup.php">Signup</a>
            <br><br>';
        }
    ?>

</nav>
</header>
</body>
</html>