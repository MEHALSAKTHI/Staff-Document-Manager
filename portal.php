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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/yourcode.js"></script>
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
            </svg> <span class='ml-2 ' >Logout</span>
        </span></a>
  </form>
</nav>    

</head>
    <body >
    <?php 
        session_start(); 
        $flag=$_SESSION['admin'];
        $un=$_SESSION['uname'];
        echo"<div class='p-5 text-secondary  '><h4 >Welcome back ".$un."...!</h1>"?>
        <div class='m-4 card'>
            <div class='card-body '>
                <div class='text-right mr-1'>
                <form  class="form-inline ml-2" action='' method='POST' id='f'>
                      <select class='form-control mr-2' name='sdate'>
                        <option value="0">Academic Year</option>
                        <option value="2013">2013-14</option>
                        <option value="2014">2014-15</option>
                        <option value="2015">2015-16</option>
                        <option value="2016">2016-17</option>
                        <option value="2017">2017-18</option>
                        <option value="2018">2018-19</option>
                        <option value="2019">2019-20</option>
                        <option value="2020">2020-21</option>
                        <option value="2021">2021-22</option>
                        <option value="2022">2022-23</option>
                        <option value="2023">2023-25</option>
                        <option value="2024">2024-26</option>
                        <option value="2025">2025-27</option>
                      </select> &nbsp&nbsp
                    <button type='submit' class='btn btn-outline-info my-2 my-sm-0'>Fetch</button> 
                    
                    <a type="button" class="btn btn-outline-warning my-2 ml-2 my-sm-0" href="portal.php">Refresh Selection</a>
                </form>
                
                <div class="form-inline">
                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                    <input class="form-control ml-2 mr-sm-2" name="search" id="search" type="search" style="font-family: FontAwesome;" placeholder='&#xf002 '  aria-label="Search">
                </div>
                <button type='button' class='mr-2 btn btn-secondary' name='convert' id='down' onclick="window.print()" >Download PDF</button>
                <button type='button' class='mr-2 btn btn-primary' name='convert' id='down' onclick='window.location.href="excel.php"'>Download Excel file</button>
                <?php
                
                $flag=$_SESSION['admin'];
                if($flag!='yes'){
                    echo "<a type='button' class='btn btn-success text-light' href='add.php' >Add Record</a>";
                }?>
                
                </div>
                <form>
                <!-- <table class='table mt-3'>
                <thead  class='text-light' style='background: rgb(45,45,45); background: linear-gradient(90deg, rgba(45,45,45,1) 0%, rgba(96,97,99,1) 48%, rgba(59,59,59,1) 100%);'>
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Id</th>
                            <th scope='col'>Name</th>
                            <th scope='col'>Course Name</th>
                            <th scope='col'>Start Date</th>
                            <th scope='col'>End Date</th>
                            <th scope='col' class='text-center'>*</th>
                        </tr>
                </thead></table> -->
                <table class='table mt-3' id='portal_table'>
                    <thead  class='text-light' style='background: rgb(45,45,45); background: linear-gradient(90deg, rgba(45,45,45,1) 0%, rgba(96,97,99,1) 48%, rgba(59,59,59,1) 100%);'>
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Id</th>
                            <th scope='col'>Name</th>
                            <th scope='col'>Course Name</th>
                            <th scope='col'>Start Date</th>
                            <th scope='col'>End Date</th>
                            <th scope='col' class='text-center'>*</th>
                        </tr>
                    </thead>
                    <!-- </thead>
                    <tbody>
                    <tr>
                        <th scope='row'>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    </tbody>
                </table> 
        </div>
        </div>-->
           

        <!-- <div class="cat" -->
        <!-- <table border="2" style="border-collapse:collapse;">
            <tr>
                <th>Sno</th>
                <th>ID</th>
                <th>Name</th>
                <th>Course Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <?php
                
                //$flag=$_SESSION['admin'];
                //if($flag!='yes'){
                  //  echo "<th scope='col'>*</th>";
                //}?>
                <th>View</th>
            </tr> -->

<?php
/* include "connection.php";

if($flag=='yes'){
    $sql="select * from stp";
}
else{
    echo "<ul id='na'>

</ul>";
    $sql="select * from stp where username='$un'";
}

$i=1;
$result=mysqli_query($conn,$sql); */
include "connection.php";
$var='Are you sure?';
$un=$_SESSION['uname'];
$flag=$_SESSION['admin'];
if(isset($_POST["sdate"]) )
        {
            $sy=$_POST["sdate"];
            $temp=intval($sy)+1;
            $sd=$sy.'-07-01';
            $ed=$temp.'-06-30';
          if($flag=='yes'){
            
            $query = "SELECT * FROM stp where start_date>='$sd' and start_date<='$ed'  ";
            
          }
          else{ 
            $query = "SELECT * FROM stp where start_date>='$sd' and start_date<='$ed' and username='$un'";
          }
        }
        else{ 
            if($flag=='yes'){
                $query="select * from stp";
            }
            else{                
                $query="select * from stp where username='$un'";
            }
        }
          $result=mysqli_query($conn,$query);

          $i=1;
while( $row= mysqli_fetch_array($result)){
    $year=explode('-',$row['end_date'])[0];
    $file= $row['id']."-".$row['title'].".pdf";
    $sd=$year.'-07-01';
    $sdate=$row['start_date'];
    $edate=$row['end_date'];
   if ($sdate<$sd){    
      $prev_yr=intval($year)-1;
      $yr_folder=$prev_yr."-".$year;
      $target_dir="C:\Praba\uploads\ $yr_folder\ ".$file;
   }
   else {
      $next_yr=intval($year)+1;
      $yr_folder=$year."-".$next_yr;
      $target_dir="C:\Praba\uploads\ $yr_folder\ ".$file;
   }
    #$target_dir="C:\Praba\uploads\ $year\ ".$file;
    echo "<tr>";
    echo "<th scope='row'>".$i."</th>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['title']."</td>";
    echo "<td>".$row['start_date']."</td>";
    echo "<td>".$row['end_date']."</td>";
    echo "<td class='text-center'> <a type='button'  target='_blank' class='btn btn-info mr-2 mt-2' href='test.php?file=$target_dir'>View</a>";
    if($flag!='yes'){
        echo "<a type='button' class='btn btn-warning mt-2 ' href='updtest.php?id=".$row['id']."&cname=".$row['title']."'>Update</a>";
        echo "<a type='button' class='btn btn-danger mt-2 ml-2' href='del.php?id=".$row['id']."&cname=".$row['title']."' onclick='return confirm(".$var.")'>Delete</a>";
        }
    
    #echo "<html><a href='test.php?file=$target_dir'>View</a></html></td>";
   
    echo "</tr>";
    $i++;
}
/* echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
echo "</table></div> </div>" */;
?>
</tr>
</tbody>
</table> 
</div>
</div>
</div>
<div class="ocean">
  <div class="wave"></div>
  <div class="wave"></div>
  <div class="wave"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  

           function search_table(value){  
                $('#portal_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {    
                          $(this).show();  
                     }  
                     else  
                     {  
                          
                          $(this).hide();  
                     }  
                });  
           }  
      });  
</script>      

