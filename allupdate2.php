<?php
   include "connection.php";
   session_start();
   $program=$_POST['program'];
   $target_dir="C:\Praba\uploads";
   $sdate=$_POST['datestart'];
   $sdate4=$_POST['datestart'];
   $edate3=$_POST['dateend'];
   $id2=$_POST['id2'];
   $program2=$_POST['program2'];
   $filename=$_FILES["fileupload"]["name"];
   $tmpname=$_FILES["fileupload"]["tmp_name"];
   $filetype=$_FILES["fileupload"]["type"];
   $errors=[];
   $fileextensions=["pdf","doc","docx"];
   $sql="select * from stp where id='$id2' and title='$program2'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$edate=$row['end_date'];
$year=explode('-',$edate)[0];
$year2=explode('-',$sdate)[0];
$filename="$id2"."-"."$program2".".pdf";
/* $target_dir="C:\Praba\uploads\ $year\ $filename";
$target_dir2="C:\Praba\uploads \\$year\ $filename"; */

    $sd=$year.'-07-01';
    $sdate=$row['start_date'];
    $edate=$row['end_date'];
   if ($sdate<$sd){    
      $prev_yr=intval($year)-1;
      $yr_folder=$prev_yr."-".$year;
      $target_dir="C:\Praba\uploads\ $yr_folder\ $filename";
      $target_dir2="C:\Praba\uploads \\$yr_folder\ $filename";
   }
   else {
      $next_yr=intval($year)+1;
      $yr_folder=$year."-".$next_yr;
      $target_dir="C:\Praba\uploads\ $yr_folder\ $filename";
      $target_dir2="C:\Praba\uploads \\$yr_folder\\ $filename";
   }

 /*   $sd2=$year.'-07-01';
   $sdate2=$row['start_date'];
   $edate2=$row['end_date'];
  if ($sdate2<$sd){    
     $prev_yr2=intval($year2)-1;
     $yr_folder2=$prev_yr2."-".$year2;
     $target_dir2="C:\Praba\uploads\ $yr_folder2\ ".$file2;
  }
  else {
     $next_yr=intval($year)+1;
     $yr_folder=$year."-".$next_yr;
     $target_dir="C:\Praba\uploads\ $yr_folder\ ".$file2;
  }
 */


#echo $target_dir;


if(!unlink($target_dir)){
unlink($target_dir2);
}

$arr=explode(".",$filename);
   $ext=strtolower(end($arr));
   $sd=$year2.'-07-01';
    $sdate=$_POST['datestart'];
    $edate=$_POST['dateend'];
   if ($sdate<$sd){    
      $prev_yr2=intval($year2)-1;
      $yr_folder2=$prev_yr2."-".$year2;
      $target_dir="C:\Praba\uploads\ $yr_folder2";
    
    }
   else {
      $next_yr2=intval($year2)+1;
      $yr_folder2=$year2."-".$next_yr2;
      $target_dir="C:\Praba\uploads\ $yr_folder2";
     }
   
echo $target_dir; 
if(!is_dir($target_dir)){
  mkdir("C:\Praba\uploads\ $yr_folder2");
}  

$newfilename="$id2"."-"."$program".".$ext";
$uploadpath="C:\Praba\uploads\ $yr_folder2\ ".$newfilename;
  
   if($sdate>$edate){
       $errors[]="Enter proper dates";
   }
if(! in_array($ext,$fileextensions))
   {
     $errors[]="Upload a PDF or Word file";
   }
   if(empty($errors))
   {
     if(move_uploaded_file($tmpname,$uploadpath))
     {
       $sql="update stp set title='$program',start_date='$sdate4',end_date='$edate3' where id='$id2' and title='$program2'";
       echo $sql;
       $result=mysqli_query($conn,$sql);
       if($result){
        header("location:portal.php");
       }
     }
     else
     {
       echo "not successfull";
     }
   }
   else
   {
    $_SESSION['error']=$errors;
    header('location:portal.php');
   }
?>