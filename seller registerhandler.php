<?php
$server_name="localhost";
$user_name="root";
$password="";
$dbname="myfirstdb";
$conn=new mysqli($server_name,$user_name,$password,$dbname);
$n=$_GET['n'];
$g=$_GET['g'];
$d=$_GET['d'];
$em=$_GET['em'];
$nu=$_GET['nu'];
$u=$_GET['u'];
$p=$_GET['p'];
// print($n);
// print($g);
// print($d);
// print($e);
// print($em);
// print($u);
// print($p);
$q="INSERT INTO sellerdetails(Name,Gender,DOB,Email,Phone,sellername,Password) VALUES('$n','$g','$d','$em','$nu','$u','$p')";
print($q);
$result=$conn->query($q);
$conn->close();
header("Location:loginseller.php");  
?>