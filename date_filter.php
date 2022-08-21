<html>
    <head>
        <title>Table</title>
        <style>
            td{
                padding:10px;
            }
            </style>
    </head>
    <body >
    <header>
            
            <div class='nav'>
                <ul>
                    
                    <li><a href='logout.php'>Logout</a></li>
            </div>
        </header>
        <div class="cat">
        <table border="2" style="border-collapse:collapse;">
            <tr>
                <th>Sno</th>
                <th>ID</th>
                <th>Name</th>
                <th>Course Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Delete</th>
                <th>View</th>
                <th>Update</th>
            </tr>
<?php
include "connection.php";
session_start();
$un=$_SESSION['uname'];
$flag=$_SESSION['admin'];
echo 'Welcome '.$un.'!!!';

echo"<button id='convert'><a href='ahome.php'>Back</a></button><span align='center'>STAFF DETAILS</span>
        <form action='' method='POST' id='f'>
        <label>Select Year &nbsp&nbsp</label>
        <select name='sdate'>
          <option value='2013'>2013-14</option>
          <option value='2014'>2014-15</option>
          <option value='2015'>2015-16</option>
          <option value='2016'>2016-17</option>
          <option value='2017'>2017-18</option>
          <option value='2018'>2018-19</option>
          <option value='2019'>2019-20</option>
          <option value='2020'>2020-21</option>
        </select> &nbsp&nbsp
        <button type='submit' class='btn btn-secondary'>Fetch</button> </form>";

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
            $query = "SELECT * FROM stp where start_date>='$sd'  and username='$un'";
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
    $target_dir="C:\Praba\uploads\ $year\ ".$file;
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['title']."</td>";
    echo "<td>".$row['start_date']."</td>";
    echo "<td>".$row['end_date']."</td>";
    echo "<td><div class='del'><a href='del.php?id=".$row['id']."&cname=".$row['title']."'>Delete</a></div></td>";
    echo "<td><html><a href='test.php?file=$target_dir' >View</a></html></td>";
    echo "<td><div class='del'><a href='update.php?id=".$row['id']."&cname=".$row['title']."'>Update</a></div></td>";
    echo "</tr>";
    $i++;
}
echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
echo "</table></div>";


    