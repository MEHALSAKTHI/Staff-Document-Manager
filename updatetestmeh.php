<?php
session_start();
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
  <a class="navbar-brand" style="color:  white;"><b>FDP STTP Manager</b></a>
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

        $flag=$_SESSION['admin'];
        $un=$_SESSION['uname'];
        echo"<div class='p-5 text-secondary '><h4 class='pb-5' >Hey ".$un.", Update details of the chosen document...!</h1>"?>
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

    <form class="mx-3 p-3 bg-light " action="allupdate2.php" method="POST" enctype="multipart/form-data"/>
    <div class="forminbox p-3">
    <label class="form-label">Staff ID </label>
    <input type="text" disabled value=<?php echo ($row[0])?> class="form-control " id="id" name="id" required>
    <input type="text" hidden value=<?php echo ($row[0])?> class="form-control " id="id" name="id" required>
    </div>
    <div class="forminbox px-3">
    <label class="form-label">Title of the professional development program </label>
    <input type="text" class="form-control" id="uid" name="program" value='<?php echo $program;?>' required><p id="demo2"></p></div> 
    <div class="forminbox px-3">
    <label class="form-label">Date of start</label>
    <input type="date" id="ep" class="form-control mb-2" name="datestart" placeholder="Enter the date in which the program has started" value=<?php echo $sdate;?> required>
    </div>
    <div class="forminbox px-3">
    <label class="form-label">Date of end</label>
    <input class="form-control mb-2" type="date" id="ep" name="dateend" placeholder="Enter the date in which the program has started" value=<?php echo $edate;?> required></div>
    <div class="forminbox p-3">
    <!-- <label class="form-label">UPLOAD DOCUMENTS</label>
    <input type = "file" name = "fileupload" required></br>  
    </div> -->
    <label class="form-label">UPLOAD DOCUMENTS</label>
    <input type = "file"  name = "fileupload" required></br>  
    <!-- <div class="formelement">
    <input type = "submit" name = "opt" value = "UPLOAD" ></br> </br>  
    </div> -->
    <input type="text" value=<?php echo $id2;?> name='id2' hidden>
    <input type="text" value='<?php echo $program2;?>' name='program2' hidden>
    <div class=" mt-2 text-right px-3 mr-3 pb-5 pt-2">
    <a type="b" class="btn btn-warning  mr-2 name="convert" id="convert" class="b" onclick="window.location.href='portal.php'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg> &nbsp BACK</a>
    <input class="btn btn-success px-3 text-light" type = "submit" name = "opt" value="UPLOAD"></input>
    
    </div>
</form></div></div>

</div>
    
  
</div>

<div class="col-5">
  <div class="p-3"><svg style='height: 100%; width: 100%; object-fit: contain'xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="674.74026" height="489" viewBox="0 0 674.74026 489" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M575.557,676.4931c.7522,5.89331,3.51807,11.28516,6.46869,16.47907.09753.17682.19794.351.30078.52783h30.66736c.62024-.161,1.23248-.33783,1.84216-.52783a33.52388,33.52388,0,0,0,9.68317-4.76373c11.28247-8.12867,15.624-23.48871,13.663-37.25208-1.21936-8.551-4.97216-17.28137-12.28-21.88672a18.43735,18.43735,0,0,0-13.2566-2.32251c-.11621.02112-.23236.04749-.351.07129a13.67965,13.67965,0,0,0-9.16327,6.44226c-3.48364,6.1889-1.4093,13.85571.30347,20.744,1.70758,6.88831,2.634,15.13306-2.32245,20.2135a12.64395,12.64395,0,0,0-14.70288-16.4342c-.35889.07653-.71265.16363-1.061.26922a11.77269,11.77269,0,0,0-2.4201,1.01343C577.08246,662.33124,574.715,669.85028,575.557,676.4931Z" transform="translate(-262.62987 -205.5)" fill="#f2f2f2"/><path d="M593.74091,692.97217c-.84973.19793-1.70221.37213-2.55994.52783h4.637c.60712-.16364,1.21149-.33783,1.81042-.52783q1.97553-.61752,3.8902-1.41724a34.89995,34.89995,0,0,0,13.40442-9.66467,27.2815,27.2815,0,0,0,4.228-6.90674,31.36944,31.36944,0,0,0,2.164-8.83862,62.859,62.859,0,0,0-1.24561-18.7461,78.23988,78.23988,0,0,0-6.11236-18.33441q-.50272-1.0491-1.0398-2.085a.40687.40687,0,0,0-.27179-.23224.46894.46894,0,0,0-.351.07129.55591.55591,0,0,0-.21906.73371,77.33792,77.33792,0,0,1,6.48713,17.672,68.02229,68.02229,0,0,1,1.92926,18.39508,29.35028,29.35028,0,0,1-5.16754,16.10163,32.4856,32.4856,0,0,1-12.16138,9.97876A44.6376,44.6376,0,0,1,593.74091,692.97217Z" transform="translate(-262.62987 -205.5)" fill="#fff"/><path d="M583.56421,693.5h1.36713c.15308-.17419.3009-.351.446-.52783a29.14011,29.14011,0,0,0,6.13355-13.1062,28.43331,28.43331,0,0,0-2.45178-17.69574,29.09218,29.09218,0,0,0-2.64978-4.38636c-.35889.07654-.71265.16364-1.061.26923a27.504,27.504,0,0,1-1.31176,34.91907C583.88367,693.149,583.72529,693.32581,583.56421,693.5Z" transform="translate(-262.62987 -205.5)" fill="#fff"/><path d="M931.05752,369.72079,793.52185,419.60093l-59.558-164.22079L871.49947,205.5Z" transform="translate(-262.62987 -205.5)" fill="#f1f1f1"/><path d="M931.05752,369.72079,793.52185,419.60093l-59.558-164.22079L871.49947,205.5Z" transform="translate(-262.62987 -205.5)" fill="#f1f1f1"/><rect x="791.59543" y="299.31879" width="83.64649" height="3.9548" transform="translate(-315.41956 96.69888) rotate(-19.93422)" fill="#fff"/><rect x="795.10115" y="308.98519" width="83.64649" height="3.9548" transform="translate(-318.50519 98.47329) rotate(-19.93422)" fill="#fff"/><rect x="798.60687" y="318.6516" width="83.64649" height="3.9548" transform="translate(-321.59082 100.2477) rotate(-19.93422)" fill="#fff"/><circle cx="525.27608" cy="112.91865" r="2.58099" fill="#fff"/><rect x="776.48936" y="257.66648" width="83.64649" height="3.9548" transform="translate(-302.12366 89.05299) rotate(-19.93422)" fill="#fff"/><rect x="779.99509" y="267.33289" width="83.64649" height="3.9548" transform="translate(-305.20929 90.8274) rotate(-19.93422)" fill="#fff"/><rect x="783.50081" y="276.99929" width="83.64649" height="3.9548" transform="translate(-308.29492 92.60181) rotate(-19.93422)" fill="#fff"/><circle cx="510.02336" cy="70.86195" r="2.58099" fill="#fff"/><rect x="806.84816" y="341.37549" width="83.64649" height="3.9548" transform="translate(-328.84454 104.419) rotate(-19.93422)" fill="#fff"/><rect x="810.35388" y="351.04189" width="83.64649" height="3.9548" transform="translate(-331.93017 106.19341) rotate(-19.93422)" fill="#fff"/><rect x="813.8596" y="360.7083" width="83.64649" height="3.9548" transform="translate(-335.0158 107.96782) rotate(-19.93422)" fill="#fff"/><circle cx="540.38215" cy="154.57095" r="2.58099" fill="#fff"/><path d="M937.3701,419.58633l-146.30136,0,0-174.68724,146.30136,0Z" transform="translate(-262.62987 -205.5)" fill="#fff"/><path d="M937.3701,419.58633l-146.30136,0,0-174.68724,146.30136,0Zm-143.72037-2.581,141.13938,0,0-169.52526-141.13938,0Z" transform="translate(-262.62987 -205.5)" fill="#e5e5e5"/><path d="M887.7254,309.46477H851.0522a1.95294,1.95294,0,0,1-1.9507-1.95071v-36.6732a1.95294,1.95294,0,0,1,1.95071-1.9507l36.6732,0a1.95293,1.95293,0,0,1,1.9507,1.9507l0,36.6732A1.95293,1.95293,0,0,1,887.7254,309.46477Zm-36.67319-39.79433a1.1717,1.1717,0,0,0-1.17042,1.17042l0,36.6732a1.17171,1.17171,0,0,0,1.17042,1.17043h36.6732a1.1717,1.1717,0,0,0,1.17042-1.17042l0-36.6732a1.1717,1.1717,0,0,0-1.17042-1.17042Z" transform="translate(-262.62987 -205.5)" fill="#e5e5e5"/><path d="M877.19161,313.95138h-36.6732a1.75761,1.75761,0,0,1-1.75563-1.75563v-36.6732a1.75762,1.75762,0,0,1,1.75563-1.75564l36.67321,0a1.75762,1.75762,0,0,1,1.75563,1.75563l0,36.6732A1.7576,1.7576,0,0,1,877.19161,313.95138Z" transform="translate(-262.62987 -205.5)" fill="#6c63ff"/><rect x="550.41929" y="123.99235" width="102.34056" height="3.9548" fill="#f1f1f1"/><rect x="550.41929" y="134.30374" width="102.34056" height="3.9548" fill="#f1f1f1"/><rect x="550.41928" y="144.61513" width="102.34056" height="3.9548" fill="#f1f1f1"/><rect x="550.41928" y="162.76318" width="102.34056" height="3.9548" fill="#f1f1f1"/><rect x="550.41928" y="173.07457" width="102.34056" height="3.9548" fill="#f1f1f1"/><rect x="550.41928" y="183.38597" width="102.34056" height="3.9548" fill="#f1f1f1"/><polygon points="197.095 477.736 207.858 477.736 212.979 436.22 197.093 436.221 197.095 477.736" fill="#ffb8b8"/><path d="M456.979,679.72228l21.19709-.00086h.00086a13.50917,13.50917,0,0,1,13.50844,13.50823v.439l-34.70574.00129Z" transform="translate(-262.62987 -205.5)" fill="#2f2e41"/><polygon points="121.713 470.364 132.161 472.95 147.106 433.88 131.686 430.064 121.713 470.364" fill="#ffb8b8"/><path d="M382.52206,671.79346l20.57639,5.092.00083.0002a13.50918,13.50918,0,0,1,9.86724,16.35812l-.10547.42611-33.68945-8.33722Z" transform="translate(-262.62987 -205.5)" fill="#2f2e41"/><path d="M424.15994,507.0938l-9.46447,53.87466s-3.64018,6.55232-2.18411,9.46447,2.18411,2.91214,0,4.36821-5.09625,0-4.36821,3.64018a37.16265,37.16265,0,0,1,.728,6.55232l-20.385,69.89145s-13.10465,5.82429-3.64018,9.46447,18.92893,6.55232,21.113,2.91214,0-8.00839,0-8.00839l33.48965-80.084s5.09625-7.28036,5.09625-11.64858S461.28977,531.847,461.28977,531.847s.728,31.30555,1.45607,33.48966-1.45607,6.55232-1.45607,9.46446-1.45607,2.91215,0,4.36822,1.45607,18.20089,1.45607,18.20089-8.73643,64.7952-3.64018,65.52323,19.657-.728,19.657-3.64017a3.63264,3.63264,0,0,0-2.18411-3.64018L486.043,600.2824a11.58433,11.58433,0,0,1,.728-6.55232c1.45608-2.91215,1.45608-2.91215,1.45608-4.36822s-.728-2.18411,0-2.91214a3.59477,3.59477,0,0,0,.728-2.18411s-1.45607-4.36822-.728-5.09625,16.74482-55.33073,11.64857-61.88305S424.15994,507.0938,424.15994,507.0938Z" transform="translate(-262.62987 -205.5)" fill="#2f2e41"/><circle cx="194.09073" cy="166.4056" r="18.92893" fill="#ffb8b8"/><path d="M443.34671,385.61335c.97328-.65269,1.011-2.14627.68475-3.3581a12.60351,12.60351,0,0,1-.86847-3.63611c.13937-3.37767,4.79141-4.73253,5.05717-8.09366.16347-2.06714-1.4407-4.35292-.515-6.14273.58458-1.13026,1.94414-1.50718,3.18216-1.7242a39.5376,39.5376,0,0,1,14.50231.19476l.69741-1.8321,3.54292,2.33766c.19349-1.137,1.76727-1.251,2.79584-.70531s1.919,1.488,3.04139,1.67c1.7889.29,3.203-1.64734,3.10852-3.51144a9.17566,9.17566,0,0,0-2.42255-5.02508,39.84944,39.84944,0,0,0-10.67343-9.23948l.98317-1.77153-2.10546.84553-.231-2.11872-2.05121,1.15287-.02921-1.90828c-2.19611,2.52172-6.02064,2.43483-9.3778,2.66221a26.99544,26.99544,0,0,0-15.42333,5.73429,20.50734,20.50734,0,0,0-7.50586,14.74027c-.1906,4.45327,1.3446,9.87334,4.6327,13.17558C437.3605,382.0614,441.78869,380.23986,443.34671,385.61335Z" transform="translate(-262.62987 -205.5)" fill="#2f2e41"/><path d="M503.16743,555.55964a9.01338,9.01338,0,0,1,.77684-13.799l-5.0487-19.96868,11.38661-6.02776,6.73369,28.29978a9.06219,9.06219,0,0,1-13.84844,11.49569Z" transform="translate(-262.62987 -205.5)" fill="#ffb8b8"/><path d="M472.73489,529.7173c-23.00911.00176-44.18872-10.41223-44.47461-10.55517l-.23751-.11876-1.93088-46.33885c-.55991-1.63751-11.58548-33.94913-13.4528-44.21929-1.892-10.40518,25.52826-19.537,28.858-20.605l.75563-8.37051,30.72778-3.31108,3.89452,10.71043,11.02382,4.13357a5.45269,5.45269,0,0,1,3.37947,6.40576l-6.12691,24.9158,12.05171,82.4335-.30942.13943A58.50177,58.50177,0,0,1,472.73489,529.7173Z" transform="translate(-262.62987 -205.5)" fill="#6c63ff"/><path d="M500.20569,534.88932,489.5421,490.99023l-11.558-52.97421,5.867-26.40243H488.867c.09193,0,9.20686.13635,11.1694,11.91074,1.90075,11.40449,7.63268,47.6997,7.6903,48.06477l9.6876,62.001Z" transform="translate(-262.62987 -205.5)" fill="#6c63ff"/><path d="M644.62987,694.5h-381a1,1,0,0,1,0-2h381a1,1,0,0,1,0,2Z" transform="translate(-262.62987 -205.5)" fill="#cbcbcb"/><path d="M481.27407,593.88611,383.2649,530.067l78.5005-120.5559,98.00917,63.81909Z" transform="translate(-262.62987 -205.5)" fill="#fff"/><path d="M481.27407,593.88611,383.2649,530.067l78.5005-120.5559,98.00917,63.81909Zm-95.06813-64.44045,94.44676,61.49941,76.18083-116.9935-94.44676-61.49941Z" transform="translate(-262.62987 -205.5)" fill="#e5e5e5"/><rect x="477.74369" y="464.03998" width="3.25692" height="65.35732" transform="translate(-461.08673 421.88957) rotate(-56.92966)" fill="#6c63ff"/><rect x="473.12297" y="471.13617" width="3.25692" height="65.35732" transform="matrix(0.54567, -0.838, 0.838, 0.54567, -469.13269, 421.24143)" fill="#6c63ff"/><rect x="468.50226" y="478.23237" width="3.25692" height="65.35732" transform="translate(-477.17865 420.59329) rotate(-56.92966)" fill="#6c63ff"/><circle cx="184.40409" cy="270.73089" r="2.12554" fill="#6c63ff"/><rect x="497.65424" y="433.46266" width="3.25692" height="65.35732" transform="translate(-426.4169 424.68239) rotate(-56.92966)" fill="#e5e5e5"/><rect x="493.03353" y="440.55886" width="3.25692" height="65.35732" transform="translate(-434.46286 424.03425) rotate(-56.92966)" fill="#e5e5e5"/><rect x="488.41281" y="447.65505" width="3.25692" height="65.35732" transform="matrix(0.54567, -0.838, 0.838, 0.54567, -442.50882, 423.38611)" fill="#e5e5e5"/><circle cx="204.50795" cy="239.8567" r="2.12554" fill="#e5e5e5"/><rect x="457.63983" y="494.91417" width="3.25692" height="65.35732" transform="translate(-496.09317 419.06963) rotate(-56.92966)" fill="#e5e5e5"/><rect x="453.01911" y="502.01036" width="3.25692" height="65.35732" transform="translate(-504.13912 418.42149) rotate(-56.92966)" fill="#e5e5e5"/><rect x="448.3984" y="509.10655" width="3.25692" height="65.35732" transform="translate(-512.18508 417.77335) rotate(-56.92966)" fill="#e5e5e5"/><circle cx="164.49353" cy="301.30821" r="2.12554" fill="#e5e5e5"/><path d="M454.57626,527.47073a9.01331,9.01331,0,0,0-11.00435-8.36186L431.65248,502.3111l-11.97461,4.75371,17.16572,23.48528a9.06218,9.06218,0,0,0,17.73267-3.07936Z" transform="translate(-262.62987 -205.5)" fill="#ffb8b8"/><path d="M431.34573,526.22588l-36.06628-46.7888,13.51372-42.47138c.99029-10.67789,7.67205-13.65953,7.9564-13.78136l.43368-.18605,11.75943,31.35938-8.63418,23.0245,21.19236,35.6425Z" transform="translate(-262.62987 -205.5)" fill="#6c63ff"/><rect x="393.40551" y="311" width="6" height="2" fill="#cbcbcb"/><path d="M830.969,518.5H818.90233v-2H830.969Zm-24.13331,0H794.769v-2h12.06665Zm-24.1333,0H770.63572v-2h12.06665Zm-24.13354,0H746.50218v-2h12.06665Zm-24.1333,0H722.36888v-2h12.06665Zm-24.1333,0H698.23558v-2h12.06665Zm-24.1333,0H674.10228v-2h12.06665Z" transform="translate(-262.62987 -205.5)" fill="#cbcbcb"/><polygon points="587.406 313 580.406 313 580.406 311 585.406 311 585.406 306 587.406 306 587.406 313" fill="#cbcbcb"/><rect x="585.40551" y="293.86035" width="2" height="6.06982" fill="#cbcbcb"/><rect x="585.40551" y="281.79004" width="2" height="6" fill="#cbcbcb"/></svg>
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

