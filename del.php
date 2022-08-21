<?php
include "connection.php";
$id=$_GET['id'];
$program=$_GET['cname'];
$result=mysqli_query($conn,"select * from stp where id='$id' and title='$program'");
$row=mysqli_fetch_assoc($result);
$edate=$row['end_date'];
$year=explode('-',$edate)[0];
$file="$id"."-"."$program".".pdf";
$sd=$year.'-07-01';
    $sdate=$row['start_date'];
    $edate=$row['end_date'];
   if ($sdate<$sd){    
      $prev_yr=intval($year)-1;
      $yr_folder=$prev_yr."-".$year;
      $target_dir="C:\Praba\uploads\ $yr_folder\ ".$file;
      $target_dir2="C:\Praba\uploads\ $yr_folder\\ ".$file;
   }
   else {
      $next_yr=intval($year)+1;
      $yr_folder=$year."-".$next_yr;
      $target_dir="C:\Praba\uploads\ $yr_folder\ ".$file;
      $target_dir2="C:\Praba\uploads\ $yr_folder\\ ".$file;
   }
/* $target_dir="C:\Praba\uploads\ $year\ $filename";*/
//$target_dir2="C:\Praba\uploads\ $year\\$filename"; 
echo $target_dir;
unlink($target_dir);
unlink($target_dir2);
 $result=mysqli_query($conn,"delete from stp where id='$id' and title='$program'");
 if($result){
    echo "<script>location.href='portal.php'</script>";
 }

?>