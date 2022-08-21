<!-- 
 <form  action="insert.php" method="POST" >
    <label style="width: 100%;">Staff ID: </label>
    <input type="text" id="id" name="id" required>
    
    <label style="width: 100%;">Title of the professional development program: </label>
    <input type="text" id="uid" name="title" placeholder="Enter the name of the program" required><p id="demo2"></p></div> 
   <label>Date of start</label></div>
  
    <input type="date" id="ep" name="datestart" placeholder="Enter the date in which the program has started" required>
</div>
<div class="formelement">
    <label>Date of end</label>
</div>
<div class="formelement">
    <input type="date" id="ep" name="dateend" placeholder="Enter the date in which the program has ended" required></div>
    <div class="formelement">
        <label>UPLOAD DOCUMENTS</label>
    </div>
    <div class="formelement">
    <input type = "file" name = "fileupload" required></br>  
    </div>
<div class="formelement">
    <input type = "submit" name = "opt" value = "UPLOAD"/></br> </br>  
    </div>
    
</form> 
--> 


<?php session_start(); 
include "connection.php";
?>
<html>
<head>
    <title>STAFF REGISTRATION</title>
    <link rel="stylesheet" href="style.css?<?php echo time(); ?>"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script>
    function check()
{
var p1=document.getElementById('ep').value;
var p2=document.getElementById('cp').value;
if(p1!=p2){
	document.getElementById('show').innerHTML="Incorrect";
return false;}
else{
	document.getElementById('show').innerHTML="Correct";}
}

function cname()
{
var na=document.getElementById("n").value;
var pt=/^[A-Za-z]+$/;

if(na==""){
document.getElementById("demo1").innerHTML="Please Enter your name";
return false;}
else{
document.getElementById("demo1").innerHTML="";}

if(na.match(pt))
true;
else{
document.getElementById("demo1").innerHTML="Invalid-Only Alphabets are allowed";
return false;}
}

function rcheck()
{
var sid=document.getElementById("uid").value;
var pt=/^[A-Za-z]+$/;
if(!sid.match(pt))
true;
else{document.getElementById("demo2").innerHTML="Only numbers are allowed";
return false;}
if(sid.length!=8){
document.getElementById("demo2").innerHTML="Roll number must be of length 8";
return false;}
else{
document.getElementById("demo2").innerHTML="";}
if(sid==""){
document.getElementById("demo2").innerHTML="Please Enter your Roll number";
return false;}
}

function rmail()
{
var e=document.getElementById("mail").value;
var p=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
if(e.match(p)){
document.getElementById("demo3").innerHTML="";
return true;
}
else{
document.getElementById("demo3").innerHTML="Invalid";
return false;}
}

</script>
<style>
    select {
  margin: 50px 0px;
  width: 150px;
  padding: 5px 35px 5px 5px;
  font-size: 16px;
  color: black;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  border: 1px solid #CCC;
  border-radius: 10px;
  height: 34px;
  font-weight: 100;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: url("1.png") 96% / 15% no-repeat #EEE;
}
</style>
</head>
<body>
    <div class="title"><h1>ENTER YOUR DETAILS</h1></div>
    <?php
    if(isset($_SESSION['error'])){
        for($i=0;$i<count($_SESSION['error']);$i++){
    echo "<div class='alert alert-danger' role='alert'>".$_SESSION['error'][$i]."</div>";
        }
    }
    if(isset($_SESSION['success'])){
       
    echo "<div class='alert alert-success' role='alert'>".$_SESSION['success']."</div>";
        }
    
    ?>
   
<div class="formbox">
<form action="insert.php" method="POST" enctype="multipart/form-data"/>
    <div class="forminbox">
    <div class="formelement">
    <label style="width: 100%;">Staff ID: </label>
    <input type="text" id="id" name="id" required>
    </div> 
        <div class="formelement">
    <label style="width: 100%;">Title of the professional development program: </label>
    <input type="text" id="uid" name="program" placeholder="Enter the name of the program" required><p id="demo2"></p></div> 
  <div class="formelement"> <label>Date of start</label></div>
  <div class="formelement">
    <input type="date" id="ep" name="datestart" placeholder="Enter the date in which the program has started" required>
</div>
<div class="formelement">
    <label>Date of end</label>
</div>
<div class="formelement">
    <input type="date" id="ep" name="dateend" placeholder="Enter the date in which the program has started" required></div>
    <div class="formelement">
        <label>UPLOAD DOCUMENTS</label>
    </div>
    <div class="formelement">
    <input type = "file" name = "fileupload" required></br>  
    </div>
<div class="formelement">
    <input type = "submit" name = "opt" value = "UPLOAD"/></br> </br>  
    </div>
    <div class="formelement">
    <button type="b" name="convert" id="convert" class="b" onclick="window.location.href='portal.php'">BACK</button>
    </div>
</form>
</div>
</body> 
</html>

<?php
unset($_SESSION['success']);
unset($_SESSION['error']);
?> 