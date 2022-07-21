<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>My Tutor</title>
</head>

<body>
    <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left"
        style="display:none;z-index:2;width:20%;min-width:200px" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Close Menu</a>
        <a href="loginpage.php" onclick="w3_close()" class="w3-bar-item w3-button">Login</a>
        <a href="regispage.php" onclick="w3_close()" class="w3-bar-item w3-button">Register</a>
        <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">Books</a>
        <a href="coursespage.php" onclick="w3_close()" class="w3-bar-item w3-button">Payment</a>
        <a href="tutorpage.php" onclick="w3_close()" class="w3-bar-item w3-button">Logout</a>
    </nav>

    <div class="w3-header w3-display-container w3-green w3-padding-32 w3-center">
        <h1 style="font-size:calc(8px+4vw); margin-bottom:0;">MyTutor</h1>
        <p style="font-size:calc(8px+1vw); margin-top:0;">Best to Help You Understanding</p>
    </div>

    <a href="index.php">back</a>

    <div class="w3-container w3-padding-64 form-container">
        <div class="w3-card-4 w3-round">
            <div class="w3-container w3-green">
                <h2 class="w3-center">Login</h2>
            </div>
            <form name="loginForm" class="w3-container" action="loginpage.php" method="post">
                <p>
                    <label class="w3-text-green"><b>Email</b></label>
                    <input class="w3-input w3-border w3-round" name="email" type="email" requiredname" required>
                </p>
                <p>
                    <label class="w3-text-green"><b>Password</b></label>
                    <input class="w3-input w3-border w3-round" name="password" type="password" name" required>
                </p>
                <p>
                    <button class="w3-btn w3-round w3-green w3-block" name="login">Login</button>
                </p>
                <p class="w3-center">
                    have you not registered? <a href="regispage.php">Click Here</a>
                </p>
            </form>
        </div>
    </div>
    <footer class="w3-container w3-green w3-center">Copyright@2022 MyTutor</footer>
</body>

</html>