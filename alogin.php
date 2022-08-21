<?php 
include "connection.php";
session_start();
$un=$_POST['username'];
$pw=$_POST['password'];
$sql="select username,Password from admin where username='$un' and Password='$pw'";

$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count==1){
$uname=$un;
$pwd=$pw;
}
else{
$uname=NULL;
$pwd=NULL;
}
if(isset($_SESSION['uname']))
{
    echo "<script>location.href='portal.php'</script>";
    
}
else{
    if($count==1){
        
        $_SESSION['uname']=$uname;
        
        echo "<script>location.href='portal.php'</script>";
        $_SESSION['admin']='yes';
    }
    else{
        echo "<script>alert('Username or Password incorrect')</script>";
        echo "<script>location.href='alogin.html'</script>";
        
     }
    
}
?>