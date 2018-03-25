<?php
   include("config.php");
   session_start();
   $range=mysqli_real_escape_string($db,$_POST['field1']);
   $email=$_SESSION['user'];
   $password=$_SESSION['password'];
   $sql = "SELECT * FROM orgsignup WHERE email = '$email' and password = '$password' union SELECT * FROM personsignup WHERE email = '$email' and password = '$password' ";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $lat=$row['lati'];
   $longi=$row['longi'];

   if($row['produ_collector']= 0)
   { if($row['waste_type']= 0)
      { $sql1= "SELECT * FROM orgsignup WHERE produ_collector=1 and waste_type = 0 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range union SELECT * FROM personsignup WHERE produ_collector=1 and waste_type = 0 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range";
      $result1 = mysqli_query($db,$sql1);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);   
      }

      else if($row['waste_type']= 1)
      { $sql1= "SELECT * FROM orgsignup WHERE produ_collector=1 and waste_type = 1 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range union SELECT * FROM personsignup WHERE produ_collector=1 and waste_type = 1 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range";
      $result1 = mysqli_query($db,$sql1);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);   
      }



      else if($row['waste_type']= 2)
      { $sql1= "SELECT * FROM orgsignup WHERE produ_collector=1 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range union SELECT * FROM personsignup WHERE produ_collector=1 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range";
      $result1 = mysqli_query($db,$sql1);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);   
      }
    }



   else if($row['produ_collector']= 1)
   {
       if($row['waste_type']= 0)
      { $sql1= "SELECT * FROM orgsignup WHERE produ_collector=0 and waste_type = 0 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range union SELECT * FROM personsignup WHERE produ_collector=0 and waste_type = 0 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range";
      $result1 = mysqli_query($db,$sql1);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      $sql2= "SELECT * FROM report WHERE sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range ";
     $result2 = mysqli_query($db,$sql2);
      $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC); 
      }




      else if($row['waste_type']= 1)
      { $sql1= "SELECT * FROM orgsignup WHERE produ_collector=0 and waste_type = 1 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range union SELECT * FROM personsignup WHERE produ_collector=0 and waste_type = 1 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range";
      $result1 = mysqli_query($db,$sql1);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);  
       $sql2= "SELECT * FROM report WHERE sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range ";
     $result2 = mysqli_query($db,$sql2);
      $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);  
       while($row){
           echo $
       }
      }




      else if($row['waste_type']= 2)
      { $sql1= "SELECT * FROM orgsignup WHERE produ_collector=0 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range union SELECT * FROM personsignup WHERE produ_collector=0 and sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range";
      $result1 = mysqli_query($db,$sql1);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
       $sql2= "SELECT * FROM report WHERE sqrt(pow(($lat-lati),2)+pow(($longi-longi),2))<=$range ";
     $result2 = mysqli_query($db,$sql2);
      $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);    
      }
      echo $row1;
      echo $row2;
   }
