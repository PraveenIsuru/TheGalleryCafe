<html lang="en" class="html">
<head>
    <title>The Gallery Cafe - Home</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.google.com/download/next-steps">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&family=BIZ+UDPGothic:wght@400;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&family=BIZ+UDPGothic:wght@400;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&family=BIZ+UDPGothic:wght@400;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anaheim:wght@400..800&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

</head>
<body>
<div class="main" id="home">
    
    <button onclick="topFunction()" class="myBtn" id="myBtn" title="Go to top">
        <i class="fa-solid fa-angles-up" style="font-size: 30px;"></i>
        </button>
    <!--Navigation bar-->
    <div class="row">
        <div class="navbar">
            <div class="column" style="width: 20%; text-align: center;">
                <img src="Images/icon.png" class="logo">
            </div>

            <div class="column" style="width: 60%;">
                <input class="srch" style="margin-top: 2px;" type="search" name="" placeholder="Search Here...">
                <a href="#"><button class="searchbutton" style="margin-top: 2px;">Search</button></a><br>

                <div class="menu">
                    <ul>
                        <li><a href="#home">HOME</a></li>
                        <li><a href="menu.html">MENU</a></li>
                        <li><a href="#promotion" style="scroll-behavior: smooth;">PROMOTIONS</a></li>
                        <li><a href="#aboutus">ABOUT</a></li>
                        <li><a href="#contactus">CONTACT</a></li>
                        <li><a href="#reservation">RESERVATIONS</a></li>                     
                    </ul>
                </div>
            </div>

            <div class="column" style="width: 20%; text-align: center;">
                <a href="login.php" class="button" style="color: aliceblue; text-decoration: none;">
                    <button class="signbutton" style="background: transparent; color: aliceblue; margin-top: 20px;">Login</button>
                </a>
                <a href="signUp.php" class="button">
                    <button class="signbutton" style="background-color: rgb(255, 255, 255); margin-top: 20px;">Sign Up</button>
                </a>
            </div>
        </div>
    </div>     

    <div class="row">
        <div class="column1">
            <div class="card1">
                <div class="name" style="font-size: 50px; font-weight: 200;">The</div> 
                <div class="name" style="font-size: 80px; font-weight: 600;">Gallery Cafe</div>
                <div style="font-size: 15px; margin-top: 10px; font-family: Inter; line-height: 1.4;">Experience a fusion of art and flavor at The Gallery Cafe, where culinary creativity meets 
                        artistic ambiance. Savor gourmet dishes in a space that celebrates both taste and visual
                        beauty.
                </div>

                <div class="">
                    <a href="#reservation"><button class="reservationbutton"> Make your Reservation</button></a>
                    <span style="padding-left: 20px; font-size: 20px; font-weight: 400; font-family: 'jost';"><u>+112 564 260</u></span>                  
                </div>
                <div style="padding-top: 25px; font-family: Inter; font-weight: 500;">
                    Join with Us : 
                    <div class="socialmedia">
                        <a href="0755612344"><i class="fa-brands fa-whatsapp" style="padding-right: 20px; color: aliceblue;"></i></a>
                        <a href="https://www.facebook.com/"  target="_blank"><i class="fa-brands fa-facebook" style="padding-right: 20px; color: aliceblue;"></i></a>
                        <a href="https://www.instagram.com/accounts/login/?hl=en"  target="_blank"><i class="fa-brands fa-instagram" style="padding-right: 20px; color: aliceblue;"></i></a>
                        <a href="https://x.com/i/flow/login" style="color: aliceblue;"  target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column2">
        </div>
    </div>
</div>

<!--Promotions-->
<div class="promo" id="promotion">
    <div style="text-align: center;">
        <div style="color: rgb(243, 243, 243); font-size: 40px; font-weight: bold; padding-top: 35px; font-family: Inter;">Special Promotions</div>
        <img src="Images/promoimg1.png" class="promoimg" alt="Buy Nasigoreng Get 2Pepsi Free">
        <img src="Images/promoimg2.png" class="promoimg" alt="Buy Nasigoreng Get 2Pepsi Free">
    </div>
</div>


<!--AboutUs-->
<div id="aboutus" class="about">
    <div class="aboutcontent">
        <div class="aboutpara" style="font-size: 25px; padding-bottom: 2%; font-family: Goblin one;">The Gallery Cafe</div>
        <div class="aboutpara" style="font-size: 30px; font-weight: 600; font-family: Unbounded;">Ready to Eat-In, Take away</div>
        <div class="aboutpara" style="font-size: 14px; padding-top: 3%; font-family: Inter; line-height: 1.3;">The Gallery Cafe offers a unique blend of 
            Sri Lankan, Chinese, and <br> Indian cuisines, bringing together the vibrant flavors of Asia. Enjoy a culinary <br>
            journey in an inviting atmosphere where tradition <br> meets innovation.
        </div>

        <div class="row">
            <div class="column">
                <div class="count">8+</div>
                <div class="countname">Years of Experiences</div>
            </div>
            <div class="column">
                <div class="count">20+</div>
                <div class="countname">Total menus</div>
            </div>
            <div class="column">
                <div class="count">3K</div>
                <div class="countname">Happy Customers</div>
            </div>
        </div>
        <a href="menu.html"><button class="viewmenu">View menu</button></a>
    </div>
</div>

<!--Contact-->
<div class="contact" id="contactus">
    <div class="row">
        <div class="column" style="width: 20%; height: 10px;"></div>
        <div class="column" style="width: 60%; height: 100px;">
            <div class="contactcard">
                <div style="color: rgb(199, 199, 199); font-family: Inter; font-size: 30px; font-weight: bold; padding-bottom: 25px;">Contact us</div>

                <div style="font-family: jost; color: rgb(198, 198, 198);">
                    <i class="fa-solid fa-phone" style="padding-right: 8px;"></i> +112 564 260 
                </div>

                <div style="font-family: jost; color: rgb(198, 198, 198); padding-top: 8px;">
                    <i class="fa-solid fa-location-dot" style="padding-right: 10px;"></i> 123 Galle Road, Colombo 03, Sri Lanka. 00300
                </div>

                <div style="font-family: jost; color: rgb(198, 198, 198); padding-top: 8px; padding-bottom: 15px;">
                    <i class="fa-regular fa-envelope-open" style="padding-right: 12px;"></i>gallarycafeinfo@gmail.com
                </div>

                <a href="#reservation"><button class="reservationbutton"> Make your Reservation</button></a>

                <div class="joinus" style="padding-top: 25px; padding-bottom: 5px; color: aliceblue;">Join with Us</div>

                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook" style="color: #004275; padding: 10px; font-size: 30px;"></i></a>
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-instagram" style="color: #808080; padding: 10px; font-size: 30px;"></i></a>
                <i class="fa-brands fa-x-twitter" style="padding: 10px; font-size: 30px;"></i>   
            </div>
        </div>
        <div class="column" style="width: 20%; height: 10px;"></div>
    </div>
</div>


<!--Reservations-->
<div class="reservation" id="reservation">
    <div class="row">
        <div class="column" style="width: 15%; height: 1%;"></div>
        <div class="column" style="width: 70%;">
            <div class="reservationcard">
                <div class="restext" style="font-size: 30px; font-weight: bold; padding-top: 4%; padding-bottom: 2%;">Reservation</div>
                <div class="restext" style="font-size: 12px; font-weight: 400;">We are thrilled to serve you at 
                    Gallery cafe. Please use the reservation form below to make your reservation.<br> While we are delighted to have you dine with us at our 
                    restaurant, we would like to let you know that we take<br> reservations only upto 90 days before dining.<br><br>
                    We look forward to serving you!</div>

                    <div class="row">
                        <div class="column" style="width: 10%; height: 1%;"></div>
                        <div class="column" style="width: 80%; height: 1%;">
                            <div class="card" style="padding-top: 2%; border-radius: 5px; width: 100%; background-color:#333333; margin-top: 3%; height: 96vh;">
                                <div style="font-size: 30px; font-weight: bold; padding-top: 3%; padding-bottom: 4%; color: antiquewhite;"> Reserve Your Table Now</div>

                                <form action="#">
                                    <div class="row">

                                        <div class="column" style="width: 50%;">
                                            <div class="reserveinput">
                                                <label for="fullname">Full Name</label><br>
                                                <input class="textarea-reservations" type="text" id="fullname" name="fullname"><br>
                                            </div>

                                            <div class="reserveinput">
                                                <label for="fullname">Email</label><br>
                                                <input class="textarea-reservations" type="text" id="fullname" name="fullname"><br>
                                            </div>

                                            <div class="reserveinput">
                                                <label for="fullname">Mobile Number</label><br>
                                                <input class="textarea-reservations" type="text" id="fullname" name="fullname"><br>
                                            </div>

                                            <div class="reserveinput">
                                                <label for="fullname">Number of Guests</label><br>
                                                <input class="textarea-reservations" type="text" id="fullname" name="fullname"><br>
                                            </div>
                                        </div>

                                        
                                        
                                        <div class="column" style="width: 50%; height: 59vh;">
                                            <div class="reserveinput">
                                                <label for="fullname">Time</label><br>
                                                <select class="textarea-reservations">
                                                    <option value="12:00-12:30" style="color: #333333; font-weight: bold;">12:00-12:30 (Lunch)</option>
                                                    <option value="12:30-1:00" style="color: #333333; font-weight: bold;">12:30-01:00 (Lunch)</option>
                                                    <option value="1:00-1:30" style="color: #333333; font-weight: bold;">01:00-01:30 (Lunch)</option>
                                                    <option value="1:30-2:00" style="color: #333333; font-weight: bold;">01:30-02:00 (Lunch)</option>
                                                    <option value="2:00-2:30" style="color: #333333; font-weight: bold;">02:00-02:30 (Lunch)</option>
                                                    <option value="2:30-3:00" style="color: #333333; font-weight: bold;">02:30-03:00 (Lunch)</option>
                                                    <option value="2:30-3:00" style="color: #333333; font-weight: bold;">06:30-07:00 (Dinner)</option>
                                                    <option value="2:30-3:00" style="color: #333333; font-weight: bold;">07:00-07:30 (Dinner)</option>
                                                    <option value="2:30-3:00" style="color: #333333; font-weight: bold;">07:30-08:00 (Dinner)</option>
                                                    <option value="2:30-3:00" style="color: #333333; font-weight: bold;">08:00-08:30 (Dinner)</option>
                                                </select><br>
                                            </div>

                                            <div class="reserveinput">
                                                <label for="datetime">Date</label><br>
                                                <input class="textarea-reservations" type="date" id="birthday" name="fullname"><br>
                                            </div>

                                            <div class="reserveinput">
                                                <label for="fullname">Message</label><br>
                                                <label for="fullname" style="font-size: 12px; color: rgb(169, 168, 168);">Special Notes</label><br>
                                                <input class="textarea-reservations" type="text" id="fullname" name="fullname"><br>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </form>
                                <div style="text-align: center; color: aliceblue;">
                                    <input type="checkbox" style="margin-right: 2%;">I accept the terms and conditions of the web service.
                                </div>
                                <div style="padding-top: 2%;">
                                    <button class="submit" name="submit" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="column" style="width: 10%; height: 1%;"></div>
                    </div>
                    
            </div>
        </div>
        <div class="column" style="width: 15%; height: 1%;"></div>

    </div>

</div>

<script>
    let mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 1;
      document.documentElement.scrollTop = 0;
    }
</script>

</body>
</html>