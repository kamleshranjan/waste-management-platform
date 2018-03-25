<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" type="text/css" href="repo.css">
</head>
<!--Head-->
<div class="title">
    <a id="title" href="index.php">
        <div>Waste Management Platform</div>
    </a>
</div>
<!--Body-->
<body id="r">
    <div class="caa"><h2>Report Forum</h2></div>
    <div class="main_form">
            <form action="r.php" method="post">
                <div id="ps">Personal Details : </div>
                <input type="text" name="name" id="name" placeholder="Name" required>
                <input type="email" name="email" id="email" placeholder="someone@something.com" required>
                <input type="text" name="contact" placeholder="Contact Number" pattern="[0-9]{10}" required>
                <textarea rows="3" cols="30" name="prob" id="prob" placeholder="Specify the problem here." required></textarea>
                <label><textarea maxlength="200" name="address" placeholder="Enter location here..."></textarea></label>
                <label id="file1">Upload images(s)</label>
                <input type="file" id="file" name="file" accept=".jpg">
                <input type="submit" name="sub" id="sub" value="Submit">
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
</html>
