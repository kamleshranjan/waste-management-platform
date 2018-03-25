<?php
include("config.php");
session_start();
$errors = array(); 
$con = mysqli_connect($host, $user, $pswd,$db);

// $ch1='0';
  //    $ch2='0';
// REGISTER USER
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $name = mysqli_real_escape_string($con,$_POST['orgname']);
      $myemail = mysqli_real_escape_string($con,$_POST['orgemail']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']);
      $mypassword2 = mysqli_real_escape_string($con,$_POST['password2']); 
      $address = mysqli_real_escape_string($con,$_POST['address']);
      $contact = mysqli_real_escape_string($con,$_POST['contact']);
      $radio = mysqli_real_escape_string($con,$_POST['radio']);
      $radio1 = mysqli_real_escape_string($con,$_POST['radio2']);
     $ch1='0';
      $ch2='0';
      if ($radio =='producer')
         $ch1='0';
      else if($radio =='collector')
         $ch1='1';
      if ($radio1 =='wet')
         $ch2='0';
      else if($radio1 =='dry')
         $ch2='1';
      else if($radio1 =='both')
         $ch2='2';
       $url= 'https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&key=AIzaSyA2aSlpQUC2UifDpn621_zpSiqdznoF9G0';

       $jsoncontent= file_get_contents($url);

       $decodedarray= json_decode($jsoncontent, true);

       $latitude= $decodedarray['results'][0]['geometry']['location']['lat'];
       $longitude= $decodedarray['results'][0]['geometry']['location']['lng'];


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "organisation name is required"); }
  if (empty($myemail)) { array_push($errors, "Email is required"); }
  if (empty($mypassword)) { array_push($errors, "Password is required"); }
  if ($mypassword != $mypassword2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT email FROM orgsignup WHERE email='$myemail' LIMIT 1 /* union SELECT email FROM personsignup WHERE email='$myemail' LIMIT 1 */";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  if ($count > 0) { 
    // if user exists
    if ($user['email'] == $myemail)
      array_push($errors, "email already exists");
  }
  

  // Finally, register user if there are no errors in the form
  else {  
      $user_check_query1 = "SELECT email FROM personsignup WHERE email='$myemail' LIMIT 1 /* union SELECT email FROM personsignup WHERE email='$myemail' LIMIT 1 */";
      $result1 = mysqli_query($con, $user_check_query1);
      $user1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      $count1 = mysqli_num_rows($result1);
      if ($count1 > 0) 
      { // if user exists
        if ($user1['email'] == $myemail)
          array_push($errors, "email already exists");
      }
        //encrypt the password before saving in the database
       else{
        $sql = "INSERT into orgsignup values ('$name','$myemail','$mypassword','$address','$contact','$ch1','$ch2','$latitude','$longitude')";
        mysqli_query($con, $sql);
        $_SESSION['user'] = $name;
        $_SESSION['success'] = "You are now logged in";
      }
     echo "Sucessfully logged in";
     header('Location:index.php');
  }
}
?>