<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db("server", $con);
    session_start();
    $user_check=$_SESSION['login_user'];
    $ses_sql=mysqli_query("select email from orgsignup where email='$user_check'", $con);
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session =$row['email'];
    if(!isset($login_session)){
        mysqli_close($con); 
        header('Location: index.php'); 
    }
?>