<?php
   include("config.php");
   $con = mysqli_connect($host, $user, $pswd,$db);
   //session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $myemail = mysqli_real_escape_string($con,$_POST['email']);
      $contact = mysqli_real_escape_string($con,$_POST['contact']); 
      $prob = mysqli_real_escape_string($con,$_POST['prob']);
      $address = mysqli_real_escape_string($con,$_POST['address']);
      $image = mysqli_real_escape_string($con,$_POST['file']);
      $image_data=file_get_contents('file.jpg');
      $encoded_image=base64_encode('$image_data');
      $url= 'https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&key=AIzaSyA2aSlpQUC2UifDpn621_zpSiqdznoF9G0';

       $jsoncontent= file_get_contents($url);

       $decodedarray= json_decode($jsoncontent, true);

       $latitude= $decodedarray['results'][0]['geometry']['location']['lat'];
       $longitude= $decodedarray['results'][0]['geometry']['location']['lng'];

      $sql = "INSERT into report values ('$name','$myemail','$address','$prob','$contact','$encoded_image','$latitude','$longitude')";
      $result = mysqli_query($con,$sql);
      header("location:index.php");
   }
?>
