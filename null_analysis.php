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
<script> 
  
var modal4 = document.getElementById('id04'); 
window.onclick = function(event) { 
    if (event.target == modal4) { 
        modal4.style.display = "none"; 
    } 
} 


var modal2 = document.getElementById('id02'); 
window.onclick = function(event) { 
    if (event.target == modal2) { 
        modal2.style.display = "none"; 
    } 
}  
</script> 

<head>
<title>Record Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="layout/styles/login.css"> 
<link rel="stylesheet" type="text/css" href="analysisdesign.css"> 

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
<div class="bgded overlay"  > 
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
          <li class="active"><a href="index.php">Home</a></li>
        <!--   <li><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="pages/gallery.html">Gallery</a></li>
              <li><a href="pages/full-width.html">Full Width</a></li>
              <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            </ul>
          </li> -->
          <li><a class="drop" href="#">Analysis</a>
            <ul>
              <li><a href="null_analysis.php">Tabular</a></li>
           
              <li><a href="graphs/bef_login_graph.php">Graphical</a></li>
            </ul>
          </li>
          <li><a   onclick="document.getElementById('id02').style.display='block'" style="width:auto;"  href="#">Admin</a></li>
          <li><a href="contact_before.html">Help</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <section id="pageintro" class="hoc clear">
    <div> 
      <!-- ################################################################################################ -->


<!-- ADMIN MODAL -->
<div id="id02" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/registered_admin.php"> 
    <div class="imgcontainer"> 
		<h3 style="color:black;">ADMIN LOGIN</h3><br>
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   
  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="uname"  placeholder="SVV id" required> 
  
      <label style="color: black;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" style="color:black"  name="pword"  required> 
          
      <button type="submit">Login</button> 
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    </div> 
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button> 
      
      <span class="psw"><a onclick="document.getElementById('id04').style.display='block' ; document.getElementById('id02').style.display='none' " style="width:auto;">Forgot password?/New User?</a></span> 
    </div> 
  </form> 
</div> 

<div id="id04" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/forgot_admin.php"> 
    <div class="imgcontainer"> 
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   
  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="svv"  placeholder="SVV id" required> 
  
      <button type="submit">Email Password</button> 
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    </div> 
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button> 
      
    </div> 
  </form> 
</div> 

     <!--  table starts -->
     <div class="search1">

  

<!-- <font color="white" align="center" style="margin-left:220px" size="75px" > Overall </font> -->
<center>
<p>BATCH WISE ANALYSIS</p>

<a href="tab_yearwise.php"><u>Click here for Tabular Analysis for a particular period of time</u></a>
<h2 style="     margin-top: -133px;font-size: 22px;    padding-bottom: 46px;" >TABULAR ANALYSIS</h2>

</center>
<br>
<br>
  

  
<form action="null_analysis.php" method="GET">
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
      
  
<div id="id01" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/registered_user.php"> 
    <div class="imgcontainer"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   
  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="uname"  placeholder="SVV id" required> 
  
      <label style="color: black;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" style="color:black"  name="pword"  required> 
          
      <button type="submit">Login</button> 
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    </div> 
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
      
      <span class="psw"><a href="#">Forgot password?/New User?</a></span> 
    </div> 
  </form> 
</div> 
 </div>




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