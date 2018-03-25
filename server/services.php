<?php
    include("config.php");
    session_start();
    $con = mysqli_connect($host, $user, $pswd,$db);
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table{
        border-style:solid;
        border-width:2px;
        border-color:pink;
        }
    </style>
</head>

<div class="title">
        <a  id="title" href="index.php">
            <div>Waste Management Platform</div>
        </a>
</div>
<ul>
    <li><a href="index.php"><h4>Home</h4></a></li>
    <li><a href="services.php" style="border-bottom: solid 3px white"><h4>Services</h4></a></li>
    <li><a href="about.php"><h4>About the Project</h4></a></li>
</ul>

<form method="post" action="report.php">
   <button class="button">Report</button>
</form>
<body id="services">
    <div class="search"><h2>Search for Buyers/Selllers</h2></div>
    <div class="search_box">
        <form action="" method="post">
                <label for="srange"><input type="text" name="field" id="srange" placeholder="Range" required></label>
                <label for="squan"><input type="text" name="field2" id="sqaun" placeholder="Quantity"></label>
                <label for="ssearch" ><input type="submit" name="search" value="Search" id="ssearch" onclick="document.getElementByTag('table').style.display="block"></label>
        </form>
        <table style="display:none;">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact</th>
            </tr>
            <tr>
                <td>Vivek</td>
                <td>vivek@tiwari.com</td>
                <td>Railway Colony,Bhusawal</td>
                <td>7452631520</td>
            </tr>
            <tr>
                <td>Vikas</td>
                <td>vikas@gmail.com</td>
                <td>Ism Dhanbad</td>
                <td>9863152045</td>
            </tr>
        </table>
<?php   
   $range=mysqli_real_escape_string($con,$_POST['field']);
        
   $email=$user;
   $sql = "SELECT * FROM orgsignup WHERE orgemail = '$email' UNION SELECT * FROM personsignup WHERE email = '$email'";
   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_assoc($result);
   $lat=$row['lati'];
   $longi=$row['longi'];
   if($row['produ_collector']== 0)
   { if($row['waste_type']== 0)
      { $sql1= "SELECT * FROM orgsignup WHERE produ_collector=1 and waste_type = 0 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range union SELECT * FROM personsignup WHERE produ_collector=1 and waste_type = 0 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range";
      $result1 = mysqli_query($con,$sql1);
      //$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);   
      }
      else if($row['waste_type']== 1)
      { $sql1= "SELECT * FROM orgsignup WHERE produ_collector=1 and waste_type = 1 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range union SELECT * FROM personsignup WHERE produ_collector=1 and waste_type = 1 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range";
      $result1 = mysqli_query($con,$sql1);
      //$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);   
      }
      else if($row['waste_type']== 2)
      { $sql1= "SELECT * FROM orgsignup WHERE produ_collector=1 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range union SELECT * FROM personsignup WHERE produ_collector=1 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range";
      $result1 = mysqli_query($con,$sql1);
      //$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);   
      }

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Contact</th>
</tr>";            
while($row = mysql_fetch_array($result)){
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['contact_no.'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con);
   }
        /*
   if($row['waste_type']!= 0 && $row['produ_collector']== 1)
   {
       if($row['waste_type']== 0)
      { $sql1= "SELECT * FROM orgsignup WHERE produ_collector=0 and waste_type = 0 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range union SELECT * FROM personsignup WHERE produ_collector=0 and waste_type = 0 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range";
      $result1 = mysqli_query($con,$sql1);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      $sql2= "SELECT * FROM report WHERE sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range ";
     $result2 = mysqli_query($con,$sql2);
      $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC); 
      }
      else if($row['waste_type']== 1)
      { $sql1= "SELECT * FROM orgsignup WHERE produ_collector=0 and waste_type = 1 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range union SELECT * FROM personsignup WHERE produ_collector=0 and waste_type = 1 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range";
      $result1 = mysqli_query($con,$sql1);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);  
       $sql2= "SELECT * FROM report WHERE sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range ";
     $result2 = mysqli_query($con,$sql2);
      $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);  
      }
      else if($row['waste_type']== 2)
      { $sql1= "SELECT * FROM orgsignup WHERE produ_collector=0 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range union SELECT * FROM personsignup WHERE produ_collector=0 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range";
      $result1 = mysqli_query($con,$sql1);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
       $sql2= "SELECT * FROM report WHERE sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range ";
     $result2 = mysqli_query($con,$sql2);
      $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);    
      }
   }*/
            
            ?>
    </div>
    <div class="footer2">
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
