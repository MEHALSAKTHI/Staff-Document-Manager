
<?php
include "connection.php";
session_start();
$id=$_POST['id'];
$username=$_POST['name'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$email=$_POST['email'];
/* echo ($id.$username.$password.$cpassword.$email); */
//if($username==''||$password==''||$cpassword==''||$id==''||$email==''){
//}
$flag=0;
$check=0;
$error=[];
/* $sql="select * from user";
$result=mysqli_query($conn,$sql); */
/* if($result){
    while($row = mysqli_fetch_assoc($result)){
        if($row['id']==$id){
            array_push($error,"The Staff with the given ID already exists");
            break;

        }
    }} */
    $sql="insert into user values('$id','$email','$password','$username')";
    echo $sql;
    $result=mysqli_query($conn,$sql);
    if($result){
       echo "<script>location.href='login.html'</script>";
    }
    /* $result1=mysqli_query($conn,$sql1);
    if($result1){
        $_SESSION['success']="SUCCESS";
        header("location:login.html");
  }
  echo $sql1 ;

  if($cpassword!=$password){
    array_push($error,"Passwords do not match");
    $flag=1;
    echo "<script>alert('Passwords do not match')</script>";
  }

  if($flag==1){
      $_SESSION['error']=$error;
      header("location:signup.html");

  } 
  else{
    $sql1="insert into user values('$id','$email','$password','$username')";
    $result1=mysqli_query($conn,$sql1);
    if($result1){
        $_SESSION['success']="SUCCESS";
        header("location:login.html");

  }} */
/*   else{
      array_push($error,"Error in Registering user , Please try again");
      $_SESSION['error']=$error;
      header("location : signup.html");
  }}  */
  ?>
