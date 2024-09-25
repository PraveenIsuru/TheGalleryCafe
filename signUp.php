<html>
    <head>
        <title>SignUp</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="signup">
            <div class="row">
                <div class="column" style="width: 30%; height: 10px;"></div>
                <div class="column" style="width: 40%;">
                    <div style="text-align: center; padding-top: 40px; padding-bottom: 25px;">
                        <img src="Images/icon.png" alt="CafeLogo" style="width: 180px;">
                    </div>
                    <div style="background-color: #2d2d2d; height: 550px; border-radius: 3px;">
                        <div style="font-size: 30px; font-weight: bold; font-family: inter; text-align: center; padding-top: 20px; color: EBE6E0;">Join with Us</div>
                        <div style="font-size: 12px; font-weight: 300; font-family: inter; text-align: center; padding-top: 3px; color: EBE6E0;">Start By Creating Your Account</div>

                        <form action="#" method="POST" style="font-family: inter; padding-block: 20px; padding-inline: 80px;">
                            <div class="inputfield">
                                <label for="fname" class="label">First Name :</label><br>
                                <input class="textarea" type="text" id="fname" name="fname"><br>
                            </div>

                            <div class="inputfield">
                                <label for="lname" class="label">Last Name :</label><br>
                                <input class="textarea" type="text" id="lname" name="lname"><br>
                            </div>

                            <div class="inputfield">
                                <label for="email" class="label">Email Address :</label><br>
                                <input class="textarea" type="email" id="email" name="email"><br>
                            </div>

                            <div class="inputfield">
                                <label for="phonenumber" class="label">Phone Number :</label><br>
                                <input class="textarea" type="text" id="phone" name="phonenumber"><br>
                            </div>

                            <div class="inputfield">
                                <label for="password" class="label">Password :</label><br>
                                <input class="textarea" type="password" id="password" name="password"><br>
                            </div>
                            <div style="text-align: center; padding-top: 15px;">
                                <button type="submit" class="signupbtn" name="submit" id="submit">Sign Up</button>
                            </div>
                            <div style="text-align: center; padding-top: 15px; color: aliceblue; font-size: 14px;">
                                Already have an Account? <a href="login.php" style="color: #009677; ">Sign In</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="column" style="width: 30%;"></div>
            </div>
        </div>
    </body>
</html>