<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="title">
        <a  id="title" href="profile.php">
            <div>Waste Management Platform</div>
        </a>
</div>
<ul>
    <li><a href="index.php"><h4>Home</h4></a></li>
    <li><a href="services.php"><h4>Services</h4></a></li>
    <li><a href="about.php"><h4>About the Project</h4></a></li>
    <li id="profile" style="float: right;"><a href="1profile.php" style="border-bottom: solid 3px white">My Profile</a></li>
</ul>
<body id="p">
    <div class="p"><h2>Your profile</h2></div>
    <div class="container3">
        <input type="text" name="username" value="Rick" disabled>
        <input type="email" name="email" value="rick@morty.com" disabled>
        <textarea name="address" disabled>London Street , London</textarea>
        <input type="number" pattern="[0-9]{10}" name="contact" value="9507946984" disabled>
        <div id="u">Username : </div>
        <div id="e">Email Id : </div>
        <div id="a">Address : </div>
        <div id="c">Contact Info : </div>
        <button id="edit">Edit Profile</button>
        <button id="update">Update Profile</button>
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
</html>
