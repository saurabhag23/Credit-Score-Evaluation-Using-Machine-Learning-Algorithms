<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "kjsce";
   

      error_reporting(0);
	  // Create connection
	  $conn = new mysqli($servername, $username, $password, $dbname);
	  // Check connection
	  if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
    }
    function f1(){
	if($_POST['add']) 
	{
	  
	
	  $c = $_POST['cname'];
	 if ($_POST['cname']!="")
	 {
	 $query="INSERT INTO COLLEGEN VALUES ('$c')";
	  mysqli_query($conn,$query);
	}
	else
	{
	  echo "Please Insert Value";
	}

	$query1="SELECT * FROM COLLEGEN";
	$data=mysqli_query($conn,$query1);
	$total=mysqli_num_rows($data);
	if($total!=0)
	{
	  
	  while($result=mysqli_fetch_assoc($data))
	  {
		echo "<center><b>".$result['college']."</b><center><br>";
	  }
	}
	}
}
?>