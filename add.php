<html>
    <head>
        <title>FDP STTP | PORTAL</title>
        <style>
            /* for the pen */
html, body {
  margin: 0;
  min-height: 100%;
  background-color: #80bfff;
}

/* waves */
.ocean {
  height: 190px; /* change the height of the waves here */
  width: 100%;
  position: relative;
  bottom: 0;
  left: 0;
  right: 0;
  overflow-x: hidden;
}

.wave {
  background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 800 88.7'%3E%3Cpath d='M800 56.9c-155.5 0-204.9-50-405.5-49.9-200 0-250 49.9-394.5 49.9v31.8h800v-.2-31.6z' fill='%23003F7C'/%3E%3C/svg%3E");
  position: absolute;
  width: 200%;
  height: 100%;
  animation: wave 10s -3s linear infinite;
  transform: translate3d(0, 0, 0);
  opacity: 0.3;
}

.wave:nth-of-type(2) {
  bottom: 0;
  animation: wave 18s linear reverse infinite;
  opacity: 0.1;
}

.wave:nth-of-type(3) {
  bottom: 0;
  animation: wave 20s -1s linear infinite;
  opacity: 0.05;
}



@keyframes wave {
    0% {transform: translateX(0);}
    50% {transform: translateX(-25%);}
    100% {transform: translateX(-50%);}
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<nav class="navbar navbar-light justify-content-between" style="height:70px;background: rgb(99,150,244);
background: linear-gradient(90deg, rgba(99,150,244,1) 0%, rgba(171,197,244,1) 44%, rgba(99,107,122,1) 100%);" >
  <a class="navbar-brand" style="color:  white;"><b>FDP STTP Documents Manager</b></a>
  <form class="form-inline pt-1">
    <a type="button" class="btn btn-light" href='logout.php'>
        <span class="mt-2 mr-2">
            <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg> <span class='ml-2 ' > Logout</span>
        </span></a>
  </form>
</nav>    

</head>
    <body >
    <?php 
        session_start(); 
        $flag=$_SESSION['admin'];
        $un=$_SESSION['uname'];
        echo"<div class='p-5 text-secondary  '><h4 class='pb-5' >Hey ".$un.", Add details of the new document...!</h1>"?>
        <div class="pt-4 container card">
          <div class="row">
            <div class="col-6 ml-5">
            <div class=' '>
            <div class='m-2 p-3 card-body '>
                
<?php 
include "connection.php";
?>
<html>
<head>
    <title>STAFF REGISTRATION</title>

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
    
    <?php
    if(isset($_SESSION['error'])){
        for($i=0;$i<count($_SESSION['error']);$i++){
    echo "<div class='alert alert-danger' role='alert'>".$_SESSION['error'][$i]."</div>";
        }
    }
    if(isset($_SESSION['success'])){
       
    echo "<div class='alert alert-success' role='alert'>".$_SESSION['success']."</div>";
        }
    
    $query = "SELECT id FROM user where username='$_SESSION[uname]' ";
    $result=mysqli_query($conn,$query);
    $row= mysqli_fetch_array($result);

    ?>

    <form class="mx-3 p-3 bg-light " action="insert.php" method="POST" enctype="multipart/form-data"/>
    <div class="forminbox p-3">
    <label class="form-label">Staff ID </label>
    <input type="text" disabled value=<?php echo ($row[0])?> class="form-control " id="id" name="id" required>
    <input type="text" hidden value=<?php echo ($row[0])?> class="form-control " id="id" name="id" required>
    </div>
    <div class="forminbox px-3">
    <label class="form-label">Title of the professional development program </label>
    <input type="text" class="form-control" id="uid" name="program"  required><p id="demo2"></p></div> 
    <div class="forminbox px-3">
    <label class="form-label">Date of start</label>
    <input type="date" id="ep" class="form-control mb-2" name="datestart" placeholder="Enter the date in which the program has started" required>
    </div>
    <div class="forminbox px-3">
    <label class="form-label">Date of end</label>
    <input class="form-control mb-2" type="date" id="ep" name="dateend" placeholder="Enter the date in which the program has started" required></div>
    <div class="forminbox p-3">
    <label class="form-label">UPLOAD DOCUMENTS</label>
    <input type = "file" name = "fileupload" required></br>  
    </div>
    <div class=" text-right px-3 mr-3 pb-5 pt-2">
    <a type="b" class="btn btn-warning  mr-2 name="convert" id="convert" class="b" onclick="window.location.href='portal.php'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg> &nbsp BACK</a>
    <input class="btn btn-success px-3 text-light" type = "submit" name = "opt" value="UPLOAD"></input>
    
    </div>
</form></div>

</div>
    
  
</div>

<div class="col-5">
  <div class="p-3"><svg style='height: 100%; width: 100%; object-fit: contain' xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="782.04441" height="701.88002" viewBox="0 0 782.04441 701.88002" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M609.48783,100.59015l-25.44631,6.56209L270.53735,187.9987,245.091,194.56079A48.17927,48.17927,0,0,0,210.508,253.17865L320.849,681.05606a48.17924,48.17924,0,0,0,58.61776,34.58317l.06572-.01695,364.26536-93.93675.06572-.01695a48.17923,48.17923,0,0,0,34.58309-58.6178l-110.341-427.87741A48.17928,48.17928,0,0,0,609.48783,100.59015Z" transform="translate(-208.9778 -99.05999)" fill="#f2f2f2"/><path d="M612.94784,114.00532l-30.13945,7.77236L278.68955,200.20385l-30.139,7.77223a34.30949,34.30949,0,0,0-24.6275,41.74308l110.341,427.87741a34.30946,34.30946,0,0,0,41.7431,24.62736l.06572-.01695,364.26536-93.93674.06619-.01707a34.30935,34.30935,0,0,0,24.627-41.7429l-110.341-427.87741A34.30938,34.30938,0,0,0,612.94784,114.00532Z" transform="translate(-208.9778 -99.05999)" fill="#fff"/><path d="M590.19,252.56327,405.917,300.08359a8.01411,8.01411,0,0,1-4.00241-15.52046l184.273-47.52033A8.01412,8.01412,0,0,1,590.19,252.56327Z" transform="translate(-208.9778 -99.05999)" fill="#f2f2f2"/><path d="M628.955,270.49906,412.671,326.27437a8.01411,8.01411,0,1,1-4.00241-15.52046l216.284-55.77531a8.01411,8.01411,0,0,1,4.00242,15.52046Z" transform="translate(-208.9778 -99.05999)" fill="#f2f2f2"/><path d="M620.45825,369.93676l-184.273,47.52032a8.01411,8.01411,0,1,1-4.00242-15.52046l184.273-47.52032a8.01411,8.01411,0,1,1,4.00241,15.52046Z" transform="translate(-208.9778 -99.05999)" fill="#f2f2f2"/><path d="M659.22329,387.87255l-216.284,55.77531a8.01411,8.01411,0,1,1-4.00242-15.52046l216.284-55.77531a8.01411,8.01411,0,0,1,4.00242,15.52046Z" transform="translate(-208.9778 -99.05999)" fill="#f2f2f2"/><path d="M650.72653,487.31025l-184.273,47.52033a8.01412,8.01412,0,0,1-4.00242-15.52047l184.273-47.52032a8.01411,8.01411,0,0,1,4.00242,15.52046Z" transform="translate(-208.9778 -99.05999)" fill="#f2f2f2"/><path d="M689.49156,505.246l-216.284,55.77532a8.01412,8.01412,0,1,1-4.00241-15.52047l216.284-55.77531a8.01411,8.01411,0,0,1,4.00242,15.52046Z" transform="translate(-208.9778 -99.05999)" fill="#f2f2f2"/><path d="M374.45884,348.80871l-65.21246,16.817a3.847,3.847,0,0,1-4.68062-2.76146L289.5963,304.81607a3.847,3.847,0,0,1,2.76145-4.68061l65.21247-16.817a3.847,3.847,0,0,1,4.68061,2.76145l14.96947,58.04817A3.847,3.847,0,0,1,374.45884,348.80871Z" transform="translate(-208.9778 -99.05999)" fill="#e6e6e6"/><path d="M404.72712,466.1822l-65.21247,16.817a3.847,3.847,0,0,1-4.68062-2.76146l-14.96946-58.04816A3.847,3.847,0,0,1,322.626,417.509l65.21246-16.817a3.847,3.847,0,0,1,4.68062,2.76145l14.96946,58.04817A3.847,3.847,0,0,1,404.72712,466.1822Z" transform="translate(-208.9778 -99.05999)" fill="#e6e6e6"/><path d="M434.99539,583.55569l-65.21246,16.817a3.847,3.847,0,0,1-4.68062-2.76145l-14.96946-58.04817a3.847,3.847,0,0,1,2.76145-4.68062l65.21247-16.817a3.847,3.847,0,0,1,4.68061,2.76146l14.96947,58.04816A3.847,3.847,0,0,1,434.99539,583.55569Z" transform="translate(-208.9778 -99.05999)" fill="#e6e6e6"/><path d="M863.63647,209.0517H487.31811a48.17928,48.17928,0,0,0-48.125,48.12512V699.05261a48.17924,48.17924,0,0,0,48.125,48.12507H863.63647a48.17924,48.17924,0,0,0,48.125-48.12507V257.17682A48.17928,48.17928,0,0,0,863.63647,209.0517Z" transform="translate(-208.9778 -99.05999)" fill="#e6e6e6"/><path d="M863.637,222.90589H487.31811a34.30948,34.30948,0,0,0-34.271,34.27093V699.05261a34.30947,34.30947,0,0,0,34.271,34.27088H863.637a34.30936,34.30936,0,0,0,34.27051-34.27088V257.17682A34.30937,34.30937,0,0,0,863.637,222.90589Z" transform="translate(-208.9778 -99.05999)" fill="#fff"/><circle cx="694.19401" cy="614.02963" r="87.85039" fill="#abbaea"/><path d="M945.18722,701.63087H914.63056V671.07421a11.45875,11.45875,0,0,0-22.9175,0v30.55666H861.1564a11.45875,11.45875,0,0,0,0,22.9175h30.55666V755.105a11.45875,11.45875,0,1,0,22.9175,0V724.54837h30.55666a11.45875,11.45875,0,0,0,0-22.9175Z" transform="translate(-208.9778 -99.05999)" fill="#fff"/><path d="M807.00068,465.71551H616.699a8.01412,8.01412,0,1,1,0-16.02823H807.00068a8.01412,8.01412,0,0,1,0,16.02823Z" transform="translate(-208.9778 -99.05999)" fill="#e6e6e6"/><path d="M840.05889,492.76314H616.699a8.01412,8.01412,0,1,1,0-16.02823H840.05889a8.01411,8.01411,0,1,1,0,16.02823Z" transform="translate(-208.9778 -99.05999)" fill="#e6e6e6"/><path d="M807.00068,586.929H616.699a8.01412,8.01412,0,1,1,0-16.02823H807.00068a8.01411,8.01411,0,0,1,0,16.02823Z" transform="translate(-208.9778 -99.05999)" fill="#e6e6e6"/><path d="M840.05889,613.97661H616.699a8.01412,8.01412,0,1,1,0-16.02823H840.05889a8.01412,8.01412,0,1,1,0,16.02823Z" transform="translate(-208.9778 -99.05999)" fill="#e6e6e6"/><path d="M574.07028,505.04162H506.72434a3.847,3.847,0,0,1-3.84278-3.84278V441.25158a3.847,3.847,0,0,1,3.84278-3.84278h67.34594a3.847,3.847,0,0,1,3.84278,3.84278v59.94726A3.847,3.847,0,0,1,574.07028,505.04162Z" transform="translate(-208.9778 -99.05999)" fill="#e6e6e6"/><path d="M574.07028,626.25509H506.72434a3.847,3.847,0,0,1-3.84278-3.84278V562.46505a3.847,3.847,0,0,1,3.84278-3.84278h67.34594a3.847,3.847,0,0,1,3.84278,3.84278v59.94726A3.847,3.847,0,0,1,574.07028,626.25509Z" transform="translate(-208.9778 -99.05999)" fill="#e6e6e6"/><path d="M807.21185,330.781H666.91017a8.01411,8.01411,0,0,1,0-16.02823H807.21185a8.01411,8.01411,0,0,1,0,16.02823Z" transform="translate(-208.9778 -99.05999)" fill="#ccc"/><path d="M840.27007,357.82862H666.91017a8.01411,8.01411,0,1,1,0-16.02822h173.3599a8.01411,8.01411,0,0,1,0,16.02822Z" transform="translate(-208.9778 -99.05999)" fill="#ccc"/><path d="M635.85911,390.6071H506.51316a3.847,3.847,0,0,1-3.84277-3.84277V285.81706a3.847,3.847,0,0,1,3.84277-3.84277H635.85911a3.847,3.847,0,0,1,3.84277,3.84277V386.76433A3.847,3.847,0,0,1,635.85911,390.6071Z" transform="translate(-208.9778 -99.05999)" fill="#abbaea"/></svg>
</div>
</div></div></div>


<?php
unset($_SESSION['success']);
unset($_SESSION['error']);
?> 
            </div>
        </div>
    </div></div>
<div class="ocean">
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
</div>

