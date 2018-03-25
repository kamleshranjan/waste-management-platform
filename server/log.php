<?php
    include("config.php");
    $con = mysqli_connect($host, $user, $pswd,$db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="title">
    <a  id="title" href="index.php">
        <div>Waste Management Platform</div>
    </a>
</div>
<body id="log">
        <div class="caa"><h2>Create an account</h2></div>
            <div class="tab">
                <button onclick="op('per', 'org' )" class="obutton" id="defaultOpen">Organisation</button>
                <button onclick="op('org','per' )" class="pbutton">Personal</button>
            </div>
        <div id="org" class="main_form">

            <form action="orgsignup1.php" method="post">
                <label for="orgname"><input type="text" name="orgname" id="org" placeholder="Organisation Name" required></label>
                <label for="id"><input type="email" name="orgemail" id="id" placeholder="Organisation Email" required></label>
                <label><input type="password" name="password" placeholder="Password" required></label>
                <label><input type="password" name="password2" placeholder="Re-type Password" required></label>
                <label><textarea maxlength="200" name="address" placeholder="Enter address here..."></textarea></label>
                <label><input type="text" name="contact"  placeholder="Contact Number" pattern="[0-9]{10}" required></label>
                <div class="con">
                    <h3>Choose one of the following</h3>
                    <label class="container">
                      <input type="radio"  name="radio">Waste Producer
                    </label>
                    <label class="container">
                      <input type="radio" name="radio">Waste Collector
                    </label>
                </div>
                <div class="con2">
                    <h3>Type of waste</h3>
                    <label class="container2">
                      <input type="radio" name="radio2">Wet Waste
                    </label>
                    <label class="container2">
                      <input type="radio" name="radio2">Dry Waste
                    </label>
                    <label class="container2">
                      <input type="radio" name="radio2">Both
                    </label>
                </div>
                <label><input type="submit" name="signup" value="Sign Up"></label>
            </form>

        </div>
        <div id="per" class="main_form">
            <form action="personsignup.php" method="post">
                <label for="name"><input type="text" name="name" id="name" placeholder="Your Name" required></label>
                <label for="id"><input type="email" name="email" id="id" placeholder="Email" required></label>
                <label><input type="password" name="password" placeholder="Password" required></label>
                <label><input type="password" name="password2" placeholder="Re-type Password" required></label>
                <label><textarea maxlength="200" name="address" placeholder="Enter address here..."></textarea></label>
                <label><input type="text" name="contact" placeholder="Contact Number" pattern="[0-9]{10}" required></label>
                <div class="con">
                    <h3>Choose one of the following</h3>
                    <label class="container">
                      <input type="radio"  name="radio">Waste Producer
                    </label>
                    <label class="container">
                      <input type="radio" name="radio">Waste Collector
                    </label>
                </div>
                <div class="con2">
                    <h3>Type of waste</h3>
                    <label class="container2">
                      <input type="radio"  name="radio2">Wet Waste
                    </label>
                    <label class="container2">
                        <input type="radio" name="radio2">Dry Waste
                    </label>
                    <label class="container2">
                      <input type="radio" name="radio2">Both
                    </label>
                </div>
                <label><input type="submit" name="signup" value="Sign Up"></label>
            </form>
        </div>
<div class="footer">
    <a href="#"><span>Privacy Policy </span></a>
    <a href="#"><span>|</span></a>
    <a href="#"><span>Terms of Service </span></a>
    <a href="#"><span>|</span></a>
    <a href="#"><span>Accessibility</span></a>
    <div>
        &copy; 2018 ScrapetheScrap
    </div>
</div>
</body>
    <script src="script.js"></script>
</html>
