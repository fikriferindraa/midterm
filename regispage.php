<?php
    // session_start();
    // if (!isset($_SESSION['session_id'])) {
    //     echo "<script>alert('Session not available.please Login');</script>";
    //     echo "<script> window.location.replace('loginpage.php');</script>";
    // }

    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $pass = sha1($_POST["password"]);
        $otp = '1';
        $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE user_email = '$email' AND user_password = '$pass' AND user_otp='$otp'");
        $stmt->execute();
        $number_of_rows = $stmt->rowCount();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        if ($number_of_rows  > 0) {
            foreach ($rows as $user)
            {
                $user_name = $user['user_name'];
                $user_phone = $user['user_phone'];
            }
            session_start();
            $_SESSION["sessionid"] = session_id();
            $_SESSION["user_email"] = $email;
            $_SESSION["user_name"] = $user_name;
            $_SESSION["user_phone"] = $user_phone;
            echo "<script>alert('Login Success');</script>";
            echo "<script> window.location.replace('index.php')</script>";
        }else{
             echo "<script>alert('Login Failed');</script>";
             echo "<script> window.location.replace('loginpage.php')</script>";
        }
    }
?>


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
    <div class="w3-header w3-display-container w3-green w3-padding-32 w3-center">
        <h1 style="font-size:calc(8px+4vw); margin-bottom:0;">MyTutor</h1>
        <p style="font-size:calc(8px+1vw); margin-top:0;">Best to Help You Understanding</p>
    </div>

    <a href="index.php">back</a>

    <div class="w3-container w3-padding-64 form-container">
        <div class="w3-card-4 w3-round">
            <div class="w3-container w3-green">
                <h2 class="w3-center">Register</h2>
            </div>
            <form name="loginForm" class="w3-container" action="login.php" method="post">
                <p>
                    <label class="w3-text-green"><b>Full Name</b></label>
                    <input class="w3-input w3-border w3-round" name="name" type="name" required>
                </p>
                <p>
                    <label class="w3-text-green"><b>Email</b></label>
                    <input class="w3-input w3-border w3-round" name="email" type="email" requiredname" required>
                </p>
                <p>
                    <label class="w3-text-green"><b>Password</b></label>
                    <input class="w3-input w3-border w3-round" name="password" type="password" name" required>
                </p>
                <p>
                    <label class="w3-text-green"><b>Address</b></label>
                    <input class="w3-input w3-border w3-round" name="address" type="address" required>
                </p>
                <p>
                    <label class="w3-text-green"><b>Phone Number</b></label>
                    <input class="w3-input w3-border w3-round" name="phoneNumber" type="phone_number" required>
                </p>
                <p>
                    <button class="w3-btn w3-round w3-green w3-block" name="submit">Submit</button>
                </p>
                <p class="w3-center">
                    have you registered? <a href="loginpage.php">Click here</a>
                </p>

            </form>

        </div>
    </div>
    <footer class="w3-container w3-green w3-center">Copyright@2022 MyTutor</footer>
</body>

</html>