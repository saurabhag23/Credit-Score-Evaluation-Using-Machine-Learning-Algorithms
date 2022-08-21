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
  $co=$_GET['k'];
  $r=$_GET['h'];
  $query="DELETE FROM COLLEGEN WHERE college='$co' AND rollno='$r'";
  $data=mysqli_query($conn,$query);
if($data)
{
	echo"<script>alert('Record Deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Student-Record-Book/c.php">
	<?php

}
else{
	echo"Record Not Deleted";
}

  ?>