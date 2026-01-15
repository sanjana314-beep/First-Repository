<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script>
        function deleteuser(a){
            
            document.getElementById("userid").value=a;
            document.getElementById("dlfrm").submit();
            
        }

        </script>
</head>

<body>
    <div name="header" id="header" style="background-color: skyblue; height: 100px;" ;>
        <table width="100%">
            <tr>
                <td><img src="Logo.png" height="95px" width="120px"></td>
                <td style="text-align: right;">
                    <a href="AdminHome.php" >Home</a>&nbsp
                    &nbsp<a href="AdminViewUsers.php" style="color:red">View Users</a>&nbsp
                   
                    &nbsp<a href="AdminLogin.php">Logout</a>&nbsp
                    &nbsp(Admin)&nbsp
                </td>
            </tr>
        </table>
    </div>
    <div name="content" id="content" style="height: 560px;">
        <br>
<form id="dlfrm" name="dlfrm" action="adminuserdeletehandler.php">
<input type="hidden" name="userid" id="userid">

    </form>
         <?php
$server_name="localhost";
$user_name="root";
$password="";
$dbname="myfirstdb";
$conn=new mysqli($server_name,$user_name,$password,$dbname);
if ($conn -> connect_error)
    {
        die("Notconnected".$connect_error);
    }
//print("connect databasetest");
print("<br>");
session_start();
$uno=$_SESSION["ssno"];
$q="SELECT * FROM userdetails";
//print($q);
$result=$conn->query($q);

?>
<center><table border="1">
    <tr><th>No</th><th>Name</th><th>Gender</th><th>Dob</th><th>Education</th><th>Email</th><th>Phone</th><th>Username</th><th>Action</th></tr>


<?php

while ($row=$result-> fetch_assoc())
{
?>
<tr>
    <td><?php print($row["UserNo"]); ?></td>
    <td><?php print($row["Name"]); ?></td>
    <td><?php print($row["Gender"]); ?></td>
    <td><?php print($row["DOB"]); ?></td>
    <td><?php print($row["Edu"]); ?></td>
    <td><?php print($row["Email"]); ?></td>
    <td><?php print($row["Phone"]); ?></td>
    <td><?php print($row["Username"]); ?></td>
    <td><input type="button" value="Delete" onclick="deleteuser('<?php print($row["UserNo"]); ?>')"></td>
</tr>
<?php

}
$conn->close();

?>
   </table>   
</center>
    </div>
    <div name="footer" id="footer" style="background-color: skyblue; height: 100px;">
        <br><br>
        <p style="text-align: center;">@SDC</p>
    </div>
</body>

</html>