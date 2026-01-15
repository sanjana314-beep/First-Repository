<?php
$server_name="localhost";
$user_name="root";
$password="";
$dbname="myfirstdb";
$conn=new mysqli($server_name,$user_name,$password,$dbname);
$u=$_GET['n'];
$p=$_GET['p'];

$q="SELECT * FROM sellerdetails WHERE sellername='$u' AND Password='$p'";
$result=$conn->query($q);
$isResult="False";
session_start();
  while ($row=$result->fetch_assoc())
    {
        $isResult='True';
        $_SESSION["ssno"]=$row["sellerno"];
        $_SESSION["ssname"]=$row["name"];
    }
if ($isResult=="True")
    {
        header("Location:sellerhome.php");
    }
else
    {
        header("Location:loginseller.php?msg=invalid credentials");
    }
    $conn->close();

?>