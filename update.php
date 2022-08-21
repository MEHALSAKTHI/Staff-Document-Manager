<?php
include "connection.php";
$id=$_GET['id'];
$program=$_GET['cname'];
$sql="select * from stp where id='$id' and title='$program'";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($result);
 $id=$row['id'];
 $program=$row['title'];
 $sdate=$row['start_date'];
 $edate=$row['end_date'];
 $name=$row['username'];
 $program2=$_GET['cname'];
 $id2=$_GET['id'];
?>


<html>
<head>
    <title>FDP STTP | PORTAL | UPDATE</title>
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
    <div class="title"><h1>UPDATE YOUR DETAILS</h1></div>
    <?php
    if(isset($_SESSION['error'])){
        for($i=0;$i<count($_SESSION['error']);$i++){
    echo "<div class='alert alert-danger' role='alert'>".$_SESSION['error'][$i]."</div>";
        }
    }
    ?>
    
<div class="formbox">
<form action="allupdate2.php" method="POST" enctype="multipart/form-data"/>
    <div class="forminbox">
    <div class="formelement">
    <label style="width: 100%;">Staff ID: </label>
    <input type="text" value=<?php echo $id;?>>
    </div> 
        <div class="formelement">
    <label style="width: 100%;">Title of the professional development program: </label>
    <input type="text" id="uid" name="program" placeholder="Enter the name of the program" value='<?php echo $program;?>' ><p id="demo2"></p></div> 
  <div class="formelement"> <label>Date of start</label></div>
  <div class="formelement">
    <input type="date" id="ep" name="datestart"value=<?php echo $sdate;?> placeholder="Enter the date in which the program has started" <?php echo $sdate;?>required;>
</div>
<div class="formelement">
    <label>Date of end</label>
</div>
<div class="formelement">
    <input type="date" id="ep" name="dateend" value=<?php echo $edate;?> placeholder="Enter the date in which the program has started" <?php echo $edate;?> required;></div>
    <div class="formelement">
        <label>UPLOAD DOCUMENTS</label>
    </div>
    <div class="formelement">
    <input type = "file" name = "fileupload" required></br>  
    </div>
<div class="formelement">
    <input type = "submit" name = "opt" value = "UPLOAD" ></br> </br>  
    </div>
    <input type="text" value=<?php echo $id2;?> name='id2' hidden>
    <input type="text" value='<?php echo $program2;?>' name='program2' hidden>
</form>
</div>
<div class="formelement">
    <button type="b" name="convert" id="convert" class="b" onclick="window.location.href='portal.php'">BACK</button>
    </div>
</body> 
</html>

<?php
if(isset($_SESSION['error'])){
unset($_SESSION['error']);}
?> 