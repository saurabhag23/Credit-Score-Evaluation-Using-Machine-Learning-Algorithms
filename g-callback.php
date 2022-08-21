<?php
session_start();
require_once "config.php";
/* $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "kjsce";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } */
  include("connection.php"); 
    if (isset($_GET['code']))
    {
        $token = $gClient -> fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['access_token'] = $token; 
        $oAuth = new Google_Service_Oauth2($gClient);
        $userData = $oAuth -> userinfo_v2_me -> get();

        // echo "<pre>";
        // var_dump($userData);
        $emailid = $userData['email'];
        
      //  echo  $emailid  ;
        $uname = str_replace("@somaiya.edu","", $emailid ); 
        //echo  $uname  ;

         $_SESSION["username"] = $uname ;

        header ('Location: home.php');
        exit();


    }

?>