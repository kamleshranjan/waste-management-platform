<?php
    include("config.php");
    $con = mysqli_connect($host, $user, $pswd,$db);
     $flag=0;
    if (isset($_POST['submit1'])) {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query = "select * from orgsignup where password='$password' AND email='$email'";
        $result = mysqli_query($con,$query);
        
        $rows =mysqli_fetch_assoc($result);
        if ($rows !=null) {
            $flag=1;
        }
        else { $flag=2;}
        
        if($flag==1){
            session_start();
            $_SESSION['user']=$email;
            $_SESSION['pass']=$password;
            header("Location: profile.php");
        }
    }
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
        <a  id="title" href="index.php">
            <div>Waste Management Platform</div>
        </a>
</div>
<div class="log_in">
    <form action="" method="post">
       <div id="sub">
            <label for="enter"><input type="submit" name="submit1" value="Log In" id="enter"></label>
       </div>
       <div id="pass">
            <label for="_password"><input type="password" name="password" id="_password" placeholder="Password" required></label>
       </div>
       <div id="id">
            <label for="_id"><input type="email" name="email" id="_id" placeholder="Email" required></label>
       </div>
    </form>
</div>
<ul>
    <li><a href="index.php" style="border-bottom: solid 3px white"><h4>Home</h4></a></li>
    <li><a href="services.php"><h4>Services</h4></a></li>
    <li><a href="about.php"><h4>About the Project</h4></a></li>
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
