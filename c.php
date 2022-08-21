
 <?php
session_start();
require("functions.php");
 

  if(isset($_SESSION['username'])){

  $usersData = getUsersData(getId($_SESSION['username']));
 
   

}
?>
 <html>
<head>
  <title>
  Add colleges applied to
  </title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
footer{

   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   #A2B70D
   text-align: center;
   height:max-content;
}
</style>

</head>
<body >
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay"   > 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
      <h1>
            <img   class ="logo2"  height="80" width="80" src="images/demo/logo2.png">   
            <a href="#">Departmental Record Book</a>            <img   class ="logo1"  height="80" width="80" src="images/demo/logo1.png"> 
          </h1>        </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a class="drop" href="#">Add Activity</a>
            <ul>
              <li><a href="workshop.php">Workshop</a></li>
              <li><a href="course.php">Course</a></li>
              <li><a href="tpp.php">TPP</a></li>
              <li><a href="competition.php">Competition</a></li>
              <li><a href="sports.php">Sports</a></li>
              <li><a href="other_activity.php">Other Activity</a></li>
              <li><a href="higher_studies.php">Higher Studies</a></li>
              
            </ul>
          </li>
          <li><a class="drop" href="#">View Progress</a>
            <ul>
              <li><a href="viewprogress/my_workshop.php">Workshop</a></li>
              <li><a href="viewprogress/my_course.php">Course</a></li>
              <li><a href="viewprogress/my_tpp.php">TPP</a></li>
              <li><a href="viewprogress/my_competition.php">Competition</a></li>
              <li><a href="viewprogress/my_sports.php">Sports</a></li>
              <li><a href="viewprogress/my_other.php">Other Activity</a></li>
              <li><a href="viewprogress/my_higherstudies.php">Higher Studies</a></li>
            </ul>
          </li>
            <li><a class="drop" href="#">Analysis</a>
            <ul>
              <li><a href="student_analysis.php">Tabular</a></li>
              <li><a href="student_graphical.php">Graphical</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Other</a>
            <ul>
              <li><a class="drop" href="#">View</a>
              <ul>
                  <li><a href="php/view_workshop.php">Workshop</a></li>
                  <li><a href="php/view_course.php">Course</a></li>
                  <li><a href="php/view_tpp.php">TPP</a></li>
                   <li><a href="php/view_competition.php">Competition</a></li>
                  <li><a href="php/view_sports.php">Sports</a></li>
                  <li><a href="php/view_otheractivity.php">Other Activity</a></li>
                  <li><a href="php/view_higherstudies.php">Higher Studies</a></li>
                </ul>
                </li>
             
          
              <li><a href="changepass.php">Change Password</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
         
     
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  
  <div class="insert_form">
  <form action="" method="GET">
    <center>

    <h1>ADD  NAMES  OF  COLLEGES  YOU  HAVE  APPLIED  TO  (optional) </h1>
    <label for="rollno">Roll No:</label>
    <input type="text"  style="width: 420px;" id="rollno" name="rollno" value="<?php echo $usersData['rollno'];?>" readOnly>
  
     
      <label for="">College Name </label>
      <input type="text" style="width: 420px;" name="cname">
      <input type="submit" name="add" value="ENTER AND ADD MORE COLLEGES">
      <input type="submit" name="add2" value="VIEW COLLEGES YOU HAVE ADDED">
    </center>
  </form>
  </div>
  
  
  
</body>
</html>
<?php

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
  if(isset($_GET['add'])) 
  {
  $pr=$_GET['rollno'];
  $query1="SELECT * FROM COLLEGEN where rollno='$pr'";
  $data=mysqli_query($conn,$query1);
  $total=mysqli_num_rows($data);
  echo $total;
  if($total<10)
{$r=$_GET['rollno'];
  $c = $_GET['cname'];
 if ($_GET['cname']!="")
 {
 $query="INSERT INTO COLLEGEN VALUES ('$r','$c')";
  mysqli_query($conn,$query);
}
else
{
    ?><br><center><h1>PLEASE INSERT COLLEGE NAME</h1></center><?php
  
}
}
else{
  echo"<script>
	swal({
	  title: 'Error',
	  text: 'Cannot add more than 10 colleges!',
	  icon: 'warning',
	  }).then(function() {
	  window.location = '../c.php'});
</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>add</title>
</head>
<body>
<!--<center><b>LIST OF COLLEGES ADDED </b></center><br><br>-->
</body>
</html>
<?php

$query1="SELECT * FROM COLLEGEN where rollno='$r'";
$data=mysqli_query($conn,$query1);
$total=mysqli_num_rows($data);
if($total!=0)
{
  echo "<center><table style='width: 750px;position:relative;left: 80px;'><th>Colleges</th><th style='width: 80px;'>Delete";
  while($result=mysqli_fetch_assoc($data))
  {
    echo "<tr><td><center><b>".$result['college']."</b><center></td><td><a href='delete.php?k=$result[college] & h=$result[rollno]' onclick='return checkdelete()'><button type='submit' name='delete' class='del-btn'><i class='fa fa-trash'></i></button></a></td></tr>";
  }
  echo"</center></table>";
  echo"<script>
function checkdelete()
{
  return confirm('Are you sure you want to delete the College from the list?');
}


  </script>";
  
}
}
if(isset($_GET['add2']))
{
  $tr=$_GET['rollno'];
  $query1="SELECT * FROM COLLEGEN where rollno='$tr'";
$data=mysqli_query($conn,$query1);
$total=mysqli_num_rows($data);
if($total!=0)
{
  echo "<center><table style='width: 750px;position:relative;left: 80px;'><th>Colleges</th><th style='width: 80px;'>Delete";
  while($result=mysqli_fetch_assoc($data))
  {
    echo "<tr><td><center><b>".$result['college']."</b><center></td><td><a href='delete.php?k=$result[college] & h=$result[rollno]' onclick='return checkdelete()'><button type='submit' name='delete' class='del-btn'><i class='fa fa-trash'></i></button></a></td></tr>";
  }
  echo"</center></table>";
  echo"<script>
function checkdelete()
{
  return confirm('Are You Sure You want to delete the College from the list');
}


  </script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>add</title>
</head>
<body>
<form>
<center> 
<input type="submit" name="submit" value="Submit List of Colleges"></center><br><br>
</form>


<center>
  <?php
include("footer.php");

?>

</center>
</body>
</html>
<?php
if(isset($_GET['submit'])){

  //    echo "<script>window.location='../other_activity.php';alert('A new entry added !!')</script>";
  
  echo "<script>
	swal({
	  title: 'Success!',
	  text: 'List of Colleges added Successfully',
	  
	  icon: 'success',
	  }).then(function() {
	  window.location = '../Student-Record-Book/home.php'});
</script>";

}?>