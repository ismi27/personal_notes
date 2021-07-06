<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: mainpage.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: mainpage.php");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style type="text/css">
        body {
            position: relative;
            width: auto;
            min-height: auto;
            background-image: url(image/bg-login.png);
            background-position: center;
            background-size: contain;
            justify-content: right;
            align-items: center;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="style/style-loginregister.css">

    <title>Login Form - Personal Notes</title>
</head>

<body>
    <nav class="navbar" style="background-image: url(image/bg-lp2.png);">
        <h1>Personal Notes</h1>
        <div class="nav-menu">
            <a href="landingpage.php"><button class="btn" style="background: transparent; color: black">Home</button></a>
            <div class="input-group">
                <a href="aboutus.php"><button class="btn" style="background: transparent; color: black">About Us</button></a>
    </nav>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p>
        </form>
    </div>
</body>

</html>