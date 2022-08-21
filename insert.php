<?php
//    include "connection.php";
//    session_start();
//    $id=$_POST['id'];
//    echo "<script>window.alert('Hello');</script>";
   
//    $program=$_POST['title'];
//    $sdate=$_POST['datestart'];
//    $edate=$_POST['dateend'];
//    $filename=$_FILES["fileupload"]["name"];

//    $tmpname=$_FILES["fileupload"]["tmp_name"];
//    echo "<script>window.alert('$tmpname');</script>";
//    $filetype=$_FILES["fileupload"]["type"];
//    $errors=[];
//    $fileextensions=["pdf","doc","docx"];
// 	$arr=explode(".",$filename);
//    $ext=strtolower(end($arr));
//    $year=explode('-',$edate)[0];
//    $target_dir="C:\Uploads\ $year\ ";
//    $newfilename="$id"."-"."$program".".pdf";
//    echo "<script>window.alert('$newfilename');</script>";
//    $uploadpath=$target_dir.$newfilename;
   

// $error=[];
// $username=$row['username'];
// if($program==''||$sdate==''||$edate==''){
//    array_push($error,"All details needs to be filed");
//    $_SESSION['error']=$error;
//    echo "<script>location.href='add.php'</script>";
  
//  }
 
//    if($sdate>$edate){
//        array_push($error,"Enter valid dates");
//    }
// if(! in_array($ext,$fileextensions))
//    {
//       array_push($error,"Upload a PDF or Word file");
//       $_SESSION['error']=$error;
//       echo "<script>location.href='add.php'</script>";
//    }
//    if(empty($errors))
//    {
//       if(!is_dir("C:\Uploads\ $year")){
//       mkdir("C:\Uploads\ $year");
//       }
      
//      if(move_uploaded_file($tmpname,$uploadpath))
//      {
//        $sql="insert into stp values($id,'$program','$sdate','$edate','$username')";
//        $result=mysqli_query($conn,$sql);
//        if($result){
//           $_SESSION['success']="Successfully added record";
//           echo "<script>location.href='add.php'</script>";
//        }
//      }
//      else
//      {
//       array_push($error,"Not successful");
//      }
//    }
//    else
//    {
// $_SESSION['error']=$error;
// echo "<script>location.href='add.php'</script>";
//    }

?>
<?php
   include "connection.php";
   session_start();
   $id=$_POST['id'];
   $program=$_POST['program'];
   
   $sdate=$_POST['datestart'];
   $edate=$_POST['dateend'];
   $filename=$_FILES["fileupload"]["name"];

   /* $tmpname=$_FILES["fileupload"]["tmp_name"];
   $filetype=$_FILES["fileupload"]["type"];
   $errors=[];
   $fileextensions=["pdf","doc","docx"];
	$arr=explode(".",$filename);
   $ext=strtolower(end($arr));
   $year=explode('-',$edate)[0];
   $target_dir="C:\Praba\uploads\ $year\ ";
   $newfilename="$id"."-"."$program".".$ext";
   $uploadpath=$target_dir.$newfilename;
   $sql="select * from stp where id=$id"; */

   $tmpname=$_FILES["fileupload"]["tmp_name"];
   $filetype=$_FILES["fileupload"]["type"];
   $errors=[];
   $fileextensions=["pdf","doc","docx"];
	$arr=explode(".",$filename);
   $ext=strtolower(end($arr));
   $year=explode('-',$edate)[0];
   $sd=$year.'-07-01';
   if ($sdate<$sd){    
      $prev_yr=intval($year)-1;
      $yr_folder=$prev_yr."-".$year;
      $target_dir="C:\Praba\uploads\ $yr_folder\ ";
      $newfilename="$id"."-"."$program".".$ext";
      $uploadpath=$target_dir.$newfilename;
      $sql="select * from stp where id=$id";
   }
   else {
      $next_yr=intval($year)+1;
      $yr_folder=$year."-".$next_yr;
      $target_dir="C:\Praba\uploads\ $yr_folder\ ";
      $newfilename="$id"."-"."$program".".$ext";
      $uploadpath=$target_dir.$newfilename;
      $sql="select * from stp where id=$id";
   }


   
   
   /* $sy=$_POST["sdate"];
            $temp=intval($sy)+1;
            $sd=$sy.'-07-01';
            $ed=$temp.'-06-30'; */
   
   
   /* $target_dir="C:\Praba\uploads\ $year\ ";
   $newfilename="$id"."-"."$program".".$ext";
   $uploadpath=$target_dir.$newfilename;
   $sql="select * from stp where id=$id";
 */
$error=[];
$username=$_SESSION['uname'];
if($program==''||$sdate==''||$edate==''){
   array_push($error,"All details needs to be filed");
   $_SESSION['error']=$error;
   echo "<script>location.href='add.php'</script>";
  
 }
 
   if($sdate>$edate){
       array_push($error,"Enter valid dates");
   }
if(! in_array($ext,$fileextensions))
   {
      array_push($error,"Upload a PDF or Word file");
      $_SESSION['error']=$error;
      echo "<script>location.href='add.php'</script>";
   }
   if(empty($errors))
   {
      if(!is_dir("C:\Praba\uploads\ $yr_folder")){
      mkdir("C:\Praba\uploads\ $yr_folder");
      }
     if(move_uploaded_file($tmpname,$uploadpath))
     {
       $sql="insert into stp values('$id','$sdate','$edate','$username','$program')";
       $result=mysqli_query($conn,$sql);
       if($result){
          $_SESSION['success']="Successfully added record";
          echo "<script>location.href='add.php'</script>";
       }
     }
     else
     {
      array_push($error,"Not successful");
     }
   }
   else
   {
$_SESSION['error']=$error;
echo "<script>location.href='add.php'</script>";
   }
?>