<?php

include 'connection.php';
include 'SimpleXLSXGen.php';

$records=[['S.no','ID','Name','Course_name','Start_date','End_date']];

$id=0;
$sql="select*from stp";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	foreach($res as $row){
		$id++;
		$records=array_merge($records,array(array($id,$row['id'],$row['username'],$row['title'],$row['start_date'],$row['end_date'])));}}
$xlsx=SimpleXLSXGen::fromArray($records);
$xlsx->downloadAs('records.xlsx');
echo "<pre>";
print_r($records);
?>