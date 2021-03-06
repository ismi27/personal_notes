<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    // header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Wow! User Registration Completed.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Already Exists.')</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style/style-loginregister.css">
    <style type="text/css">
        body {
            position: relative;
            width: auto;
            min-height: auto;
            background-image: url(image/bg-register.png);
            background-position: center;
            background-size: cover;
            justify-content: right;
            align-items: center;
        }
    </style>
    <title>Register Form - Personal Notes</title>
</head>

<body>
    <nav class="navbar" style="background-image: url(image/bg-lp2.png);">
        <h1>Personal Notes</h1>
        <div class="nav-menu">
            <a href="landingpage.php"><button class="btn" style="background: transparent; color: black">Home</button></a>
            <div class="input-group">
                <a href="aboutus.php"><button class="btn" style="background: transparent; color: black">About Us</button></a>
            </div>
        </div>

    </nav>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account? <a href="login.php">Login Here</a></p>
        </form>
    </div>
</body>

</html>