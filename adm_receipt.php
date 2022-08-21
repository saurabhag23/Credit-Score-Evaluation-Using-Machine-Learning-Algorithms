<!-- background image not seen -->
<?php
session_start();
require("functions.php");
 

  if(isset($_SESSION['username'])){

  $usersData = getUsersData(getId($_SESSION['username']));
 
   

}
?>

<!DOCTYPE html>
<!--
Template Name: Basend
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->

<html lang="">
<head>
<title>Record Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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

<div >
  <main class="hoc container clear"> 


    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">ENTER FINAL ADMISSION DETAILS</h6><br>
      <p>Fill this only if you haven't submitted the admission receipt in the higher studies details previously. Kindly check your higher studies details in View Progress, in case you are in doubt.</p>


<!--       FORM STARTS -->
<div class="insert_form">
  <form onSubmit=" return validateForm()"  name="insertwork" action="php/ins_admreceipt.php?k=<?php echo $usersData['rollno'];?>" method="POST" enctype="multipart/form-data">
    <label for="rollno">Roll No:</label>
    <input type="text" id="rollno" name="rollno" value="<?php echo $usersData['rollno'];?>" readOnly>
  
   <label for="rollno">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $usersData['name'];?>" readOnly>

   
<?php
$r=$usersData['rollno'];
?>
  


    <label for="con_by">Attach Admission Receipt:</label>
    <input id="image" type="file" name="image"> 

    
  

    

    <input type="submit" value="Submit" name="btn">
  </form>
</div>

<!-- FORM ENDS -->
      
    </div>

    


 
   
  </main>
    </div>
  <center>


 <?php
include("footer.php");

?>


 <!--<footer>
<h3 style="margin-top:5px;"> For any further queries Email us at admin@somaiya.edu</h3>
<a href="feedback_s.php" style="font-size: 20px;margin-top:-5px;">Click here for feedback / queries </a>
</footer>-->

</center>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    

</div>

</div><!--  background image tag -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script>

function validateForm() {

 // var x = document.forms["insertwork"]["fname"].value;
  //var s = document.forms["insertwork"]["start_date"].value;

  var certi = document.forms["insertwork"]["certi"].value;
  var image = document.forms["insertwork"]["image"].value;
  
  
  //checking the certi contains pdf jpg or png
  if(certi.includes("pdf")){
   var n = certi.indexOf("pdf");
  }
  else
    if(certi.includes("jpg")){
   var n = certi.indexOf("jpg");
  }
  else
    if(certi.includes("png")){
   var n = certi.indexOf("png");
  }
  
  
  //checking if image is jpg or png
  if(image.includes("jpg")){
   var q =image.indexOf("jpg");
  }
  else
	  if(image.includes("png")){
   var q= image.indexOf("png");
  }
  
   //Names of files without extensions
   //var o=certi.substring(0,n-1);
  
  /*var a=0;
  
  
  //if dates are invalid 
  if(a==0)
  {
  alert("Dates Invalid");
  return false;
  }
  
  
  if(a==1&&b==1)
  {
  //alert("Wait...");
  return true;
  }*/
  
}
</script>
</body>
</html>
