<!-- background image not seen -->
<?php
session_start();
require("functions.php");
 
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
<link rel="stylesheet" type="text/css" href="faq.css"> 
<link rel="stylesheet" type="text/css" href="layout/styles/login.css"> 
<link rel="stylesheet" type="text/css" href="analysisdesign.css"> 
<script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
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
<div class="bgded overlay" > 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
      <h1>
            <img   class ="logo2"  height="80" width="80" src="images/demo/logo2.png">   
            <a href="#">Departmental Record Book</a>            <img   class ="logo1"  height="80" width="80" src="images/demo/logo1.png"> 
          </h1>       </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="admin_index.php">Home</a></li>
          <li><a class="drop" href="#">Search By</a>
            <ul>
              <li><a href="searchby/rollno.php">Roll No</a></li>
			   <li><a href="searchby/name.php">Name</a></li>
              
            </ul>
          </li>
          <li><a class="drop" href="#">View</a>
              <ul>
                  <li><a href="php/admin_view/view_workshop.php">Workshop</a></li>
                  <li><a href="php/admin_view/view_courses.php">Course</a></li>
                  <li><a href="php/admin_view/view_tpp.php">TPP</a></li>
                   <li><a href="php/admin_view/view_competitions.php">Competition</a></li>
                  <li><a href="php/admin_view/view_sports.php">Sports</a></li>
                  <li><a href="php/admin_view/view_otheractivity.php">Other Activity</a></li>
                  <li><a href="php/admin_view/view_higherstudies.php">Higher Studies</a></li>
                </ul>
                </li>
            <li><a class="drop" href="#">Analysis</a>
            <ul>
              <li><a href="analysis.php">Tabular</a></li>
              <li><a href="graphical.php">Graphical</a></li>
            </ul>
          </li>
         <li><a class="drop" href="#">Other</a>
            <ul>
             
             
              <li><a href="admin_index.php">Help</a></li>
              <li><a href="changepass_a.php">Change Password</a></li>
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
  <!--  table starts -->
<div class="search1">

  

<!-- <font color="white" align="center" style="margin-left:220px" size="75px" > Overall </font> -->
<center>
    
<br>
<br>
  
<br>
<br>
<p>BATCH WISE ANALYSIS</p>

<a href="tab_yearwise_admin.php"><u>Click here for Tabular Analysis for a particular period of time</u></a>
<h2 style="     margin-top: -133px;font-size: 22px;    padding-bottom: 46px;" >TABULAR ANALYSIS</h2>

</center>
<br>
<br>

  
<form action="analysis.php" method="GET">
Enter Graduation Year<br> <input type="text" name="grad"><br><br><br>
<center><input type="Submit" name="submit" value="Submit"></center>
<?php
error_reporting(0);
$r=$_GET['grad'];
?>
</form>
<br>
<br>

<center >TABULAR ANALYSIS FOR BATCH <?php echo $r?></center>
<center >(NUMBER OF WORKSHOPS/COURSES/ACTIVITIES ETC. ATTENDED/PARTICIPATED/ATTEMPTED)</center>
<br>
<br>
<table>
    <tr>
      <th style="    color: #ffffff; border : 1px solid black;">Categories      </th>
      <th style="    color: #ffffff; border : 1px solid black;">First Year</th>
      <th style="    color: #ffffff; border : 1px solid black;"> Second Year</th>
      <th style="    color: #ffffff; border : 1px solid black;">Third Year</th>
      <th style="    color: #ffffff; border : 1px solid black;">Fourth Year</th>
    </tr>
    
    <tr>
    
    
      <th style="    color: #ffffff;  border : 1px solid black;">Workshops</th>
      <td>
         <?php 
  
    $ct=getcount(1,2,1,$r,'FY');
    echo $ct; 

?>
</td>
       <td>
         <?php 
  
$ct=getcount(3,4,1,$r,'SY');
echo $ct;

?>
</td>
<td>
         <?php 
  
$ct=getcount(5,6,1,$r,'TY');
echo $ct;

?>
</td>
<td>
         <?php 

  $ct=getcount(7,8,1,$r,'LY');
echo $ct;  

?>
</td>
    </tr>
    <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Courses</th>
      <td>
         <?php 
 
$ct=getcount(1,2,2,$r,'FY');
echo $ct;

?></td>
  <td>
         <?php 
  
$ct=getcount(3,4,2,$r,'SY');
echo $ct;

?></td>
  <td>
         <?php 
 
$ct=getcount(5,6,2,$r,'TY');
echo $ct;

?></td>
  <td>
         <?php 
 
$ct=getcount(7,8,2,$r,'LY');
echo $ct;

?></td>

</tr>
    
    

  <tr>
      <th style="    color: #ffffff;border : 1px solid black;">TPP</th>
      
      <td>
         <?php 
  
$ct=getcount(1,2,3,$r,'FY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(3,4,3,$r,'SY');
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getcount(5,6,3,$r,'TY');
echo $ct;

?></td>
  <td>
         <?php 
  
$ct=getcount(7,8,3,$r,'LY');
echo $ct;

?></td>





</tr>
  <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Sports</th>
      <td>
         <?php 
  
 $ct=getcount(1,2,4,$r,'FY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(3,4,4,$r,'SY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(5,6,4,$r,'TY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(7,8,4,$r,'LY');
echo $ct;

?></td>

</tr>
  <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Competitions</th>
      <td>
         <?php 
  
 $ct=getcount(1,2,5,$r,'FY');
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getcount(3,4,5,$r,'SY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(5,6,5,$r,'TY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(7,8,5,$r,'LY');
echo $ct;

?></td>

</tr>


  <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Other Activities</th>
            <td>
         <?php 
  
 $ct=getcount(1,2,6,$r,'FY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(3,4,6,$r,'SY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(5,6,6,$r,'TY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(7,8,6,$r,'LY');
echo $ct;

?></td>
</tr>



<tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Exam Attempts (for Higher Studies)</th>
            <td>
         <?php 
  
 $ct=getcount(1,2,7,$r,'FY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(3,4,7,$r,'SY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(5,6,7,$r,'TY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcount(7,8,7,$r,'LY');
echo $ct;

?></td>
</tr>
</table>
<br>
<br>
<br>
<br>

<center >TABULAR ANALYSIS FOR BATCH <?php echo $r?></center>
<center >(NO. OF STUDENTS PARTICIPATING IN VARIOUS ACTIVITIES)</center>

<br>
<br>
<table>
    <tr>
      <th style="    color: #ffffff; border : 1px solid black;">Categories      </th>
      <th style="    color: #ffffff; border : 1px solid black;">First Year</th>
      <th style="    color: #ffffff; border : 1px solid black;"> Second Year</th>
      <th style="    color: #ffffff; border : 1px solid black;">Third Year</th>
      <th style="    color: #ffffff; border : 1px solid black;">Fourth Year</th>
    </tr>
    
    <tr>
    
    
      <th style="    color: #ffffff;  border : 1px solid black;">Workshops</th>
      <td>
         <?php 
  
    $ct=getcounts(1,2,1,$r,'FY');
    echo $ct; 

?>
</td>
       <td>
         <?php 
  
$ct=getcounts(3,4,1,$r,'SY');
echo $ct;

?>
</td>
<td>
         <?php 
  
$ct=getcounts(5,6,1,$r,'TY');
echo $ct;

?>
</td>
<td>
         <?php 

  $ct=getcounts(7,8,1,$r,'LY');
echo $ct;  

?>
</td>
    </tr>
    <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Courses</th>
      <td>
         <?php 
 
$ct=getcounts(1,2,2,$r,'FY');
echo $ct;

?></td>
  <td>
         <?php 
  
$ct=getcounts(3,4,2,$r,'SY');
echo $ct;

?></td>
  <td>
         <?php 
 
$ct=getcounts(5,6,2,$r,'TY');
echo $ct;

?></td>
  <td>
         <?php 
 
$ct=getcounts(7,8,2,$r,'LY');
echo $ct;

?></td>

</tr>
    
    

  <tr>
      <th style="    color: #ffffff;border : 1px solid black;">TPP</th>
      
      <td>
         <?php 
  
$ct=getcounts(1,2,3,$r,'FY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcounts(3,4,3,$r,'SY');
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getcounts(5,6,3,$r,'TY');
echo $ct;

?></td>
  <td>
         <?php 
  
$ct=getcounts(7,8,3,$r,'LY');
echo $ct;

?></td>





</tr>
  <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Sports</th>
      <td>
         <?php 
  
 $ct=getcounts(1,2,4,$r,'FY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcounts(3,4,4,$r,'SY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcounts(5,6,4,$r,'TY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcounts(7,8,4,$r,'LY');
echo $ct;

?></td>

</tr>
  <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Competitions</th>
      <td>
         <?php 
  
 $ct=getcounts(1,2,5,$r,'FY');
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getcounts(3,4,5,$r,'SY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcounts(5,6,5,$r,'TY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcounts(7,8,5,$r,'LY');
echo $ct;

?></td>

</tr>


  <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Other Activities</th>
            <td>
         <?php 
  
 $ct=getcounts(1,2,6,$r,'FY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcounts(3,4,6,$r,'SY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcounts(5,6,6,$r,'TY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcounts(7,8,6,$r,'LY');
echo $ct;

?></td>
</tr>



<tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Exam Attempts (for Higher Studies)</th>
            <td>
         <?php 
  
 $ct=getcounts(1,2,7,$r,'FY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcounts(3,4,7,$r,'SY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcounts(5,6,7,$r,'TY');
echo $ct;

?></td>
  <td>
         <?php 
  
 $ct=getcounts(7,8,7,$r,'LY');
echo $ct;

?></td>
</tr>
</table>

</center>
</div>

<!-- table ends -->
      

</center>
</div>
 </div>

   
  </main>
    </div>
  


    <!--  FAQs END -->
    <!-- ################################################################################################ -->
    <!-- / main body -->
    
 
</div>
<center>
  <?php
include("footer.php");

?>

</center>
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
</body>
</html>