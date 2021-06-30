<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 3 - Ismi Rizki Sopiyanti</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style-landingpage.css">
</head>

<body>
    <nav class="navbar">
        <h1>Personal Notes</h1>
        <div class="nav-menu">
        <a href="landingpage.php"><button class="btn" style="background: transparent; color: black">Home</button></a>
            <div class="input-group">
            <a href="aboutus.php"><button class="btn" style="background: transparent; color: black">About Us</button></a>
            </div>
            <a href="login.php"><button class="btn">Log In</button></a>
        </div>

    </nav>
    <section class="hero-container">
        <div>
            <div>
                <h1>Stay Productive
                </h1>
                <p>Take A Notes Everyday</p>
            </div>
            <section class="button-container">
                <button class="btn" type="button" onclick="location.href='register.php';">Sign Up Now</button>
            </section>
        </div>
    </section>
    <section class="description-container">
        <div>
            <div>
                <h2> Do it all with Personal Notes</h2>
                <p>You can write notes according to categories that you can set yourself, making them easier to view with a simple display.....</p>
            </div>
            <div class="description-left-footer">
                <p class="font-weight-bold">Read more</p>
            </div>
        </div>
        <img src="note.png" alt="prototype">
    </section>
    <section class="content-container">
        <div class="card">
            <img src="note1.png" alt="card1">
            <div class="card-body">
                <h3>Get your personal task</h3>
                <p>You can write all your stories, personal notes, cellphone numbers in this personal category, of course you can change the name....</p>
            </div>
            <div class="card-footer">

                <p class="font-weight-bold">Read more</p>
            </div>
        </div>
        <div class="card">
            <img src="note2.png" alt="card2">
            <div class="card-body">
                <h3>Do you have a new project?</h3>
                <p>You can write a whole new project whether it's description, requirements, deadlines etc. in this project category, of course you can change the name....</p>
            </div>
            <div class="card-footer">

                <p class="font-weight-bold">Read more</p>
            </div>
        </div>
        <div class="card">
            <img src="note3.png" alt="card3">
            <div class="card-body">
                <h3>Write all done task</h3>
                <p>You can write down all the notes that need to be corrected in an effort to complete this new project, etc. in this in progress category, of course you can change the name....</p>
            </div>
            <div class="card-footer">

                <p class="font-weight-bold">Read more</p>
            </div>
        </div>
    </section>
    <section class="button-container">
        <button class="btn">See More Now</button>
    </section>
    <footer>
        <p><b>Personal Notes</b> 2021 copyright all rights reserved</p>
    </footer>

</body>

</html>