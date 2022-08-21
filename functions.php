<?php



 $conn = mysqli_connect('localhost','root','','kjsce');


 function checkfilename($certi){
   echo '<script language="javascript">';
  echo 'alert(message successfully sent)';  //not showing an alert box.
  echo '</script>';
 }




 
 function getyearwisedata($id)
 {
	  global $conn;
    $array = array();
	/*FO WORKSHOP ID=1*/
	if($id==1)
	   {$q1 = mysqli_query($conn,"select count(*)   from workshop where rollno IN(select rollno from student WHERE sem=1 OR sem=2)");
	     $array[]=$q1->fetch_assoc();
	     
	   
	     

	   $q2 = mysqli_query($conn,"select count(*)   from workshop where rollno IN(select rollno from student WHERE sem=3 OR sem=4)");
	     $array[]=$q2->fetch_assoc();
	   $q3 = mysqli_query($conn,"select count(*)   from workshop where rollno IN(select rollno from student WHERE sem=6 OR sem=5)");
	     $array[]=$q3->fetch_assoc();
		 $q4 = mysqli_query($conn,"select count(*)  from workshop where rollno IN(select rollno from student WHERE sem=7 OR sem=8)");
	     $array[]=$q4->fetch_assoc();
	   } 
	   return $array;
 }
 
/*function getcount($osem,$esem,$no)
{
	 global $conn;
    $array = array();
	if($no==1)
	
	$q1 = mysqli_query($conn,"select count(*) as total  from workshop where rollno IN(select rollno from student WHERE sem='".$osem."' OR sem='".$esem."')");
	else
		if($no==2)
	$q1 = mysqli_query($conn,"select count(*) as total  from course where rollno IN(select rollno from student WHERE sem='".$osem."' OR sem='".$esem."')");
	else
		if($no==3)
	$q1 = mysqli_query($conn,"select count(*) as total  from tpp where rollno IN(select rollno from student WHERE sem='".$osem."' OR sem='".$esem."')");
	else
		if($no==4)
	$q1 = mysqli_query($conn,"select count(*) as total  from sports where rollno IN(select rollno from student WHERE sem='".$osem."' OR sem='".$esem."')");
	else
		if($no==5)
	$q1 = mysqli_query($conn,"select count(*) as total  from competition where rollno IN(select rollno from student WHERE sem='".$osem."' OR sem='".$esem."')");
	else
		if($no==6)
	$q1 = mysqli_query($conn,"select count(*) as total  from other where rollno IN(select rollno from student WHERE sem='".$osem."' OR sem='".$esem."')");
	else
		if($no==7)
	$q1 = mysqli_query($conn,"select count(*) as total  from higherstudies where rollno IN(select rollno from student WHERE sem='".$osem."' OR sem='".$esem."')");
	

		$data=$q1->fetch_assoc();

	return $data['total'];
}*/




/*function getyearwisedata($id)
{
	 global $conn;
   $array = array();
   /*FO WORKSHOP ID=1
   if($id==1)
	  {$q1 = mysqli_query($conn,"select count(*)   from workshop where rollno IN(select rollno from student WHERE sem=1 OR sem=2)");
		$array[]=$q1->fetch_assoc();
		
	  
		

	  $q2 = mysqli_query($conn,"select count(*)   from workshop where rollno IN(select rollno from student WHERE sem=3 OR sem=4)");
		$array[]=$q2->fetch_assoc();
	  $q3 = mysqli_query($conn,"select count(*)   from workshop where rollno IN(select rollno from student WHERE sem=6 OR sem=5)");
		$array[]=$q3->fetch_assoc();
		$q4 = mysqli_query($conn,"select count(*)  from workshop where rollno IN(select rollno from student WHERE sem=7 OR sem=8)");
		$array[]=$q4->fetch_assoc();
	  } 
	  return $array;
}*/


function getct($no,$yr,$x,$y)
{
	global $conn;
   $array = array();
   if($no==1 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from workshop where (start_date>='".$x."' AND end_date<='".$y."')AND year='FY'");
   else 
   if($no==1 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from workshop where (start_date>='".$x."' AND end_date<='".$y."')AND year='SY'");
   else 
   if($no==1 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from workshop where (start_date>='".$x."' AND end_date<='".$y."')AND year='TY'");
   else 
   if($no==1 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from workshop where (start_date>='".$x."' AND end_date<='".$y."')AND year='LY'");
   else 
   if($no==2 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from course where (start_date>='".$x."' AND end_date<='".$y."')AND year='FY'");
   else 
   if($no==2 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from course where (start_date>='".$x."' AND end_date<='".$y."')AND year='SY'");
   else 
   if($no==2 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from course where (start_date>='".$x."' AND end_date<='".$y."')AND year='TY'");
   else 
   if($no==2 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from course where (start_date>='".$x."' AND end_date<='".$y."')AND year='LY'");
   else 
   if($no==3 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from tpp where (start_date>='".$x."' AND end_date<='".$y."')AND year='FY'");
   else 
   if($no==3 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from tpp where (start_date>='".$x."' AND end_date<='".$y."')AND year='SY'");
   else 
   if($no==3 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from tpp where (start_date>='".$x."' AND end_date<='".$y."')AND year='TY'");
   else 
   if($no==3 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from tpp where (start_date>='".$x."' AND end_date<='".$y."')AND year='LY'");
   else 
   if($no==4 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from sports where (start_date>='".$x."' AND end_date<='".$y."')AND year='FY'");
   else 
   if($no==4 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from sports where (start_date>='".$x."' AND end_date<='".$y."')AND year='SY'");
   else 
   if($no==4 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from sports where (start_date>='".$x."' AND end_date<='".$y."')AND year='TY'");
   else 
   if($no==4 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from sports where (start_date>='".$x."' AND end_date<='".$y."')AND year='LY'");
   else
   if($no==5 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from competition where (start_date>='".$x."' AND end_date<='".$y."')AND year='FY'");
   else 
   if($no==5 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from competition where (start_date>='".$x."' AND end_date<='".$y."')AND year='SY'");
   else 
   if($no==5 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from competition where (start_date>='".$x."' AND end_date<='".$y."')AND year='TY'");
   else 
   if($no==5 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from competition where (start_date>='".$x."' AND end_date<='".$y."')AND year='LY'");
   else
   if($no==6 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from other where (start_date>='".$x."' AND end_date<='".$y."')AND year='FY'");
   else 
   if($no==6 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from other where (start_date>='".$x."' AND end_date<='".$y."')AND year='SY'");
   else 
   if($no==6 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from other where (start_date>='".$x."' AND end_date<='".$y."')AND year='TY'");
   else 
   if($no==6 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from other where (start_date>='".$x."' AND end_date<='".$y."')AND year='LY'");
   else
   if($no==7 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from higherstudies where (exam_date>='".$x."' AND exam_date<='".$y."')AND year='FY'");
   else 
   if($no==7 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from higherstudies where  (exam_date>='".$x."' AND exam_date<='".$y."')AND year='SY'");
   else 
   if($no==7 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from higherstudies where  (exam_date>='".$x."' AND exam_date<='".$y."') AND year='TY'");
   else 
   if
   ($no==7 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from higherstudies where  (exam_date>='".$x."' AND exam_date<='".$y."') AND year='LY'");
  


   $data=$q1->fetch_assoc();

   return $data['total'];
}


function getcount($osem,$esem,$no,$grad,$yr)
{
	global $conn;
   $array = array();
   if($no==1 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from workshop where rollno IN(select rollno from student WHERE grad_year='".$grad."' AND dropper=0)AND year='FY'");
   
 else 
 if($no==1 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from workshop where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");
   else 
 if($no==1 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from workshop where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");

   else 
 if($no==1 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(*) as total  from workshop where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");
 
 
   else
   if($no==2 && $yr=='FY')
$q1 = mysqli_query($conn,"select count(*) as total from course where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='FY'");

else
if($no==2 && $yr=='SY')
$q1 = mysqli_query($conn,"select count(*) as total from course where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");


else
if($no==2 && $yr=='TY')
$q1 = mysqli_query($conn,"select count(*) as total  from course where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");


else
if($no==2 && $yr=='LY')
$q1 = mysqli_query($conn,"select count(*) as total  from course where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");

else
if($no==3 && $yr=='FY')
$q1 = mysqli_query($conn,"select count(*) as total  from tpp where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='FY'");

else
if($no==3 && $yr=='SY')
$q1 = mysqli_query($conn,"select count(*) as total  from tpp where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");

else
if($no==3 && $yr=='TY')
$q1 = mysqli_query($conn,"select count(*) as total  from tpp where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");

else
if($no==3 && $yr=='LY')
$q1 = mysqli_query($conn,"select count(*) as total  from tpp where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");


else
if($no==4 && $yr=='FY')
$q1 = mysqli_query($conn,"select count(*) as total  from sports where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='FY'");

else
if($no==4 && $yr=='SY')
$q1 = mysqli_query($conn,"select count(*) as total  from sports where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");

else
if($no==4 && $yr=='TY')
$q1 = mysqli_query($conn,"select count(*) as total  from sports where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");

else
if($no==4 && $yr=='LY')
$q1 = mysqli_query($conn,"select count(*) as total  from sports where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");

else
if($no==5 && $yr=='FY')
$q1 = mysqli_query($conn,"select count(*) as total  from competition where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='FY'");

else
if($no==5 && $yr=='SY')
$q1 = mysqli_query($conn,"select count(*) as total  from competition where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");


else
if($no==5 && $yr=='TY')
$q1 = mysqli_query($conn,"select count(*) as total  from competition where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");



else
if($no==5 && $yr=='LY')
$q1 = mysqli_query($conn,"select count(*) as total  from competition where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");


else
if($no==6 && $yr=='FY')
$q1 = mysqli_query($conn,"select count(*) as total  from other where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='FY'");


else
if($no==6 && $yr=='SY')
$q1 = mysqli_query($conn,"select count(*) as total  from other where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");

else
if($no==6 && $yr=='TY')
$q1 = mysqli_query($conn,"select count(*) as total  from other where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");

else
if($no==6 && $yr=='LY')
$q1 = mysqli_query($conn,"select count(*) as total  from other where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");

else
if($no==7 && $yr=='FY')
$q1 = mysqli_query($conn,"select count(*) as total  from higherstudies where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='FY'");
else
if($no==7 && $yr=='SY')
$q1 = mysqli_query($conn,"select count(*) as total  from higherstudies where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");

else
if($no==7 && $yr=='TY')
$q1 = mysqli_query($conn,"select count(*) as total  from higherstudies where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");
else
if($no==7 && $yr=='LY')
$q1 = mysqli_query($conn,"select count(*) as total  from higherstudies where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");





  
   
   
	   $data=$q1->fetch_assoc();

   return $data['total'];
}


function getcounts($osem,$esem,$no,$grad,$yr)
{
	global $conn;
   $array = array();
   if($no==1 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from workshop where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='FY'");
   
 else 
 if($no==1 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from workshop where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");
   else 
 if($no==1 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from workshop where rollno IN(select  rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");

   else 
 if($no==1 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from workshop where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");
 
 
   else
   if($no==2 && $yr=='FY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total from course where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='FY'");

else
if($no==2 && $yr=='SY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total from course where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");


else
if($no==2 && $yr=='TY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from course where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");


else
if($no==2 && $yr=='LY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from course where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");

else
if($no==3 && $yr=='FY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from tpp where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='FY'");

else
if($no==3 && $yr=='SY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from tpp where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");

else
if($no==3 && $yr=='TY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from tpp where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");

else
if($no==3 && $yr=='LY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from tpp where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");


else
if($no==4 && $yr=='FY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from sports where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='FY'");

else
if($no==4 && $yr=='SY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from sports where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");

else
if($no==4 && $yr=='TY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from sports where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");

else
if($no==4 && $yr=='LY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from sports where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");

else
if($no==5 && $yr=='FY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from competition where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='FY'");

else
if($no==5 && $yr=='SY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from competition where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");


else
if($no==5 && $yr=='TY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from competition where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");



else
if($no==5 && $yr=='LY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from competition where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");


else
if($no==6 && $yr=='FY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from other where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='FY'");


else
if($no==6 && $yr=='SY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from other where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");

else
if($no==6 && $yr=='TY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from other where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");

else
if($no==6 && $yr=='LY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from other where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");

else
if($no==7 && $yr=='FY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from higherstudies where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='FY'");
else
if($no==7 && $yr=='SY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from higherstudies where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='SY'");

else
if($no==7 && $yr=='TY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from higherstudies where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='TY'");
else
if($no==7 && $yr=='LY')
$q1 = mysqli_query($conn,"select count(distinct rollno) as total  from higherstudies where rollno IN(select rollno from student WHERE grad_year='".$grad."'AND dropper=0)AND year='LY'");





  
   
   
	   $data=$q1->fetch_assoc();

   return $data['total'];
}



function getcts($no,$yr,$x,$y)
{
	global $conn;
   $array = array();
   if($no==1 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from workshop where (start_date>='".$x."' AND end_date<='".$y."')AND year='FY'");
   else 
   if($no==1 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from workshop where (start_date>='".$x."' AND end_date<='".$y."')AND year='SY'");
   else 
   if($no==1 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from workshop where (start_date>='".$x."' AND end_date<='".$y."')AND year='TY'");
   else 
   if($no==1 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from workshop where (start_date>='".$x."' AND end_date<='".$y."')AND year='LY'");
   else 
   if($no==2 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from course where (start_date>='".$x."' AND end_date<='".$y."')AND year='FY'");
   else 
   if($no==2 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from course where (start_date>='".$x."' AND end_date<='".$y."')AND year='SY'");
   else 
   if($no==2 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from course where (start_date>='".$x."' AND end_date<='".$y."')AND year='TY'");
   else 
   if($no==2 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from course where (start_date>='".$x."' AND end_date<='".$y."')AND year='LY'");
   else 
   if($no==3 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from tpp where (start_date>='".$x."' AND end_date<='".$y."')AND year='FY'");
   else 
   if($no==3 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from tpp where (start_date>='".$x."' AND end_date<='".$y."')AND year='SY'");
   else 
   if($no==3 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from tpp where (start_date>='".$x."' AND end_date<='".$y."')AND year='TY'");
   else 
   if($no==3 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from tpp where (start_date>='".$x."' AND end_date<='".$y."')AND year='LY'");
   else 
   if($no==4 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from sports where (start_date>='".$x."' AND end_date<='".$y."')AND year='FY'");
   else 
   if($no==4 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from sports where (start_date>='".$x."' AND end_date<='".$y."')AND year='SY'");
   else 
   if($no==4 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from sports where (start_date>='".$x."' AND end_date<='".$y."')AND year='TY'");
   else 
   if($no==4 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from sports where (start_date>='".$x."' AND end_date<='".$y."')AND year='LY'");
   else
   if($no==5 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from competition where (start_date>='".$x."' AND end_date<='".$y."')AND year='FY'");
   else 
   if($no==5 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from competition where (start_date>='".$x."' AND end_date<='".$y."')AND year='SY'");
   else 
   if($no==5 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from competition where (start_date>='".$x."' AND end_date<='".$y."')AND year='TY'");
   else 
   if($no==5 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from competition where (start_date>='".$x."' AND end_date<='".$y."')AND year='LY'");
   else
   if($no==6 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from other where (start_date>='".$x."' AND end_date<='".$y."')AND year='FY'");
   else 
   if($no==6 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from other where (start_date>='".$x."' AND end_date<='".$y."')AND year='SY'");
   else 
   if($no==6 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from other where (start_date>='".$x."' AND end_date<='".$y."')AND year='TY'");
   else 
   if($no==6 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from other where (start_date>='".$x."' AND end_date<='".$y."')AND year='LY'");
   else
   if($no==7 && $yr=='FY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from higherstudies where (exam_date>='".$x."' AND exam_date<='".$y."')AND year='FY'");
   else 
   if($no==7 && $yr=='SY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from higherstudies where  (exam_date>='".$x."' AND exam_date<='".$y."')AND year='SY'");
   else 
   if($no==7 && $yr=='TY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from higherstudies where  (exam_date>='".$x."' AND exam_date<='".$y."') AND year='TY'");
   else 
   if
   ($no==7 && $yr=='LY')
   
   $q1 = mysqli_query($conn,"select count(distinct rollno) as total  from higherstudies where  (exam_date>='".$x."' AND exam_date<='".$y."') AND year='LY'");
  


   $data=$q1->fetch_assoc();

   return $data['total'];
}

/*function getyearwisedata($id)
{
	 global $conn;
   $array = array();
   /*FO WORKSHOP ID=1
   if($id==1)
	  {$q1 = mysqli_query($conn,"select count(*)   from workshop where rollno IN(select rollno from student WHERE sem=1 OR sem=2)");
		$array[]=$q1->fetch_assoc();
		
	  
		

	  $q2 = mysqli_query($conn,"select count(*)   from workshop where rollno IN(select rollno from student WHERE sem=3 OR sem=4)");
		$array[]=$q2->fetch_assoc();
	  $q3 = mysqli_query($conn,"select count(*)   from workshop where rollno IN(select rollno from student WHERE sem=6 OR sem=5)");
		$array[]=$q3->fetch_assoc();
		$q4 = mysqli_query($conn,"select count(*)  from workshop where rollno IN(select rollno from student WHERE sem=7 OR sem=8)");
		$array[]=$q4->fetch_assoc();
	  } 
	  return $array;
}*/

function gethigherst($no)
{
	global $conn;
   $array = array();
   if($no==1)
   
   $q1 = mysqli_query($conn,"select count(*)  as total  from higherstudies where name_exam like 'GRE'");
   else
	   if($no==2)
   $q1 = mysqli_query($conn,"select count(*) as total  from higherstudies where name_exam like 'GMAT' OR name_exam like 'CAT' OR name_exam like 'MAH-MBA/MMS CET'");
   else
	   if($no==3)
   $q1 = mysqli_query($conn,"select count(*) as total  from higherstudies where name_exam like 'GATE'");
   else
	   if($no==4)
   $q1 = mysqli_query($conn,"select count(*) as total  from higherstudies where name_exam like 'TOEFL' OR name_exam like 'IELTS'");
   
   
   
	   $data=$q1->fetch_assoc();

   return $data['total'];
}






function getUsersData($idno){
    global $conn;
    $array = array();
	$q = mysqli_query($conn,"select * from student where rollno='".$idno."'");

    
	while($r=mysqli_fetch_assoc($q))
	{
		
		$array['rollno']= $r['rollno'];
		$array['name']= $r['name'];
		$array['sem']= $r['sem'];
		$array['department']= $r['department'];
		$array['adm_year']= $r['adm_year'];
		$array['grad_year']= $r['grad_year'];



	}
	return $array;

}

function getFacultyData($idno){
    global $conn;
    $array = array();
	$q = mysqli_query($conn,"select * from faculty_info where ID='".$idno."'");

    
	while($r=mysqli_fetch_assoc($q))
	{
		$array['ID']= $r['ID'];
		$array['Type']= $r['Type'];
		$array['Name']= $r['Name'];
		$array['dept']= $r['dept'];
		

	}
	return $array;

}
function getFacultyID($username)
{   global $conn;
	$q = mysqli_query($conn,"select ID from faculty_info where username='".$username."'");
	while($r =mysqli_fetch_assoc($q))
	{
		return $r['ID'];
	}
}
function getID($username)
{   global $conn;
	$q = mysqli_query($conn,"select rollno from student where username='".$username."'");
	while($r =mysqli_fetch_assoc($q))
	{
		return $r['rollno'];
	}
}

?>
