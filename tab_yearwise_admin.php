<!-- id01 is student login 
id02 is admin login 
id03 is forgot password-student
id03 is forgot password-admin 

------------------------
4 pages for before login 

index.php
null_analysis.php
graphs/bef_login_graph.php
contact_before.html

-->


<?php
require("functions.php");
?>


<!DOCTYPE html>

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
table{
    background-color: white;
    margin-left: -81px;

    MARGIN-TOP: -33px;
    width: 63%;
    margin-top: -17px;
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

<!--  table starts -->
<div class="search1">

  

<!-- <font color="white" align="center" style="margin-left:220px" size="75px" > Overall </font> -->
<center>

<h2 style="     margin-top: -143px;font-size: 22px;    padding-bottom: 46px;" >TABULAR ANALYSIS</h2>

</center>
  

  

<form action="tab_yearwise_admin.php" method="GET">

<div class="fieldset1">
 <center>
 
 <br>
 <br>
 <br>
  
<span style="color: white; font-size:22px;">YEARWISE</span><br><br>
<font color="white">Search By Date : From</font><input style="width: 700px;"   type="date" name="sdate" placeholder="Search.."><br>
 
<font color="white">Search By Date : To&nbsp&nbsp&nbsp&nbsp&nbsp</font><input style="width: 700px;"   type="date" name="edate" placeholder="Search..">
 
 </center>
 
<br><br><br>
 <center>
 <input type="submit" name="button" />
 </form>

<?php 
error_reporting(0);
if(isset($_GET['button'])) {
   $sd=$_GET['sdate'];

$ed=$_GET['edate'];}
?>

<br>
<br>

<center >TABULAR ANALYSIS FOR RECORDS BETWEEN <?php echo $sd?> AND <?php echo $ed?></center>
<br>

<center>(NUMBER OF WORKSHOPS/COURSES/ACTIVITIES ETC. ATTENDED/PARTICIPATED/ATTEMPTED)</center>
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
  
    $ct=getct(1,'FY',$sd,$ed);
    echo $ct; 

?>
</td>
       <td>
         <?php 
  
$ct=getct(1,'SY',$sd,$ed);
echo $ct;

?>
</td>
<td>
         <?php 
  
  $ct=getct(1,'TY',$sd,$ed);
echo $ct;

?>
</td>
<td>
         <?php 

$ct=getct(1,'LY',$sd,$ed);
echo $ct;  

?>
</td>
    </tr>
    <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Courses</th>
      <td>
         <?php 
 
 $ct=getct(2,'FY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(2,'SY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getct(2,'TY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getct(2,'LY',$sd,$ed);
echo $ct;

?></td>

</tr>

<tr>
      <th style="    color: #ffffff;border : 1px solid black;">TPP</th>
      
      <td>
         <?php 
  
  $ct=getct(3,'FY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(3,'SY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
 $ct=getct(3,'TY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(3,'LY',$sd,$ed);
echo $ct;

?></td>





</tr>
  

  <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Sports</th>
      <td>
         <?php 
  
  $ct=getct(4,'FY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(4,'SY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(4,'TY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(4,'LY',$sd,$ed);
echo $ct;

?></td>

</tr>
  <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Competitions</th>
      <td>
         <?php 
  
  $ct=getct(5,'FY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getct(5,'SY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(5,'TY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(5,'LY',$sd,$ed);
echo $ct;

?></td>

</tr>


  <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Other Activities</th>
            <td>
         <?php 
  
  $ct=getct(6,'FY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(6,'SY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(6,'TY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(6,'LY',$sd,$ed);
echo $ct;

?></td>
</tr>



<tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Exam Attempts (for Higher Studies)</th>
            <td>
         <?php 
  
  $ct=getct(7,'FY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(7,'SY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(7,'TY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getct(7,'LY',$sd,$ed);
echo $ct;

?></td>
</tr>
</table>

<br><br>
<br>

<center>(NO. OF STUDENTS PARTICIPATING IN VARIOUS ACTIVITIES)
</center>
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
  
    $ct=getcts(1,'FY',$sd,$ed);
    echo $ct; 

?>
</td>
       <td>
         <?php 
  
$ct=getcts(1,'SY',$sd,$ed);
echo $ct;

?>
</td>
<td>
         <?php 
  
  $ct=getcts(1,'TY',$sd,$ed);
echo $ct;

?>
</td>
<td>
         <?php 

$ct=getcts(1,'LY',$sd,$ed);
echo $ct;  

?>
</td>
    </tr>
    <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Courses</th>
      <td>
         <?php 
 
 $ct=getcts(2,'FY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(2,'SY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getcts(2,'TY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getcts(2,'LY',$sd,$ed);
echo $ct;

?></td>

</tr>

<tr>
      <th style="    color: #ffffff;border : 1px solid black;">TPP</th>
      
      <td>
         <?php 
  
  $ct=getcts(3,'FY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(3,'SY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
 $ct=getcts(3,'TY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(3,'LY',$sd,$ed);
echo $ct;

?></td>





</tr>
  

  <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Sports</th>
      <td>
         <?php 
  
  $ct=getcts(4,'FY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(4,'SY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(4,'TY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(4,'LY',$sd,$ed);
echo $ct;

?></td>

</tr>
  <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Competitions</th>
      <td>
         <?php 
  
  $ct=getcts(5,'FY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
 
 $ct=getcts(5,'SY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(5,'TY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(5,'LY',$sd,$ed);
echo $ct;

?></td>

</tr>


  <tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Other Activities</th>
            <td>
         <?php 
  
  $ct=getcts(6,'FY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(6,'SY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(6,'TY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(6,'LY',$sd,$ed);
echo $ct;

?></td>
</tr>



<tr>
      <th style="    color: #ffffff;  border : 1px solid black;">Exam Attempts (for Higher Studies)</th>
            <td>
         <?php 
  
  $ct=getcts(7,'FY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(7,'SY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(7,'TY',$sd,$ed);
echo $ct;

?></td>
  <td>
         <?php 
  
  $ct=getcts(7,'LY',$sd,$ed);
echo $ct;

?></td>
</tr>
</table>
</center>
</div>

<!-- table ends -->
      
  



 <center>
  <?php
include("footer.php");

?>

</center>

      <!-- ################################################################################################ -->
   
  </section>
  <!-- ################################################################################################ -->
</div>



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