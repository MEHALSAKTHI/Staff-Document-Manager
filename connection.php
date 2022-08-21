<?php
$host='localhost';
$uname='root';
$pass='';
$conn=mysqli_connect($host,$uname,$pass);
if(!$conn){
    die("Connection error".mysqli_connect_error());
}

mysqli_query($conn,"use staffstp");
?>