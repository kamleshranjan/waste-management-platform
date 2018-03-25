<?php
    include("config.php");
    $con = mysqli_connect($host, $user, $pswd,$db);
    session_start();
    $usr=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="title">
        <a  id="title" href="profile.php">
            <div>Waste Management Platform</div>
        </a>
</div>
<div class="log_out">
    <div id="username"><?php echo $usr; ?></div>
    <form action="logout.php" method="post">
       <div id="sub">
            <input type="submit" name="submit2" value="Log Out">
       </div>
    </form>
</div>
<ul>
    <li><a href="index.php" ><h4>Home</h4></a></li>
    <li><a href="services.php"><h4>Services</h4></a></li>
    <li><a href="about.php"><h4>About the Project</h4></a></li>
    <li id="profile" style="float: right;"><a href="1profile.php">Profile</a></li>
</ul>
<form method="post" action="report.php">
   <button class="button">Report</button>
</form>
<body id="index">
    <div class="main">
        <section class="start">
            <div id="get"><a href="log.php"><h1>Get Started</h1></a></div>
        </section>
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