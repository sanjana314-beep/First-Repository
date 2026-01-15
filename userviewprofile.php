<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <div name="header" id="header" style="background-color: skyblue; height: 100px;" ;>
        <table width="100%">
            <tr>
                <td><img src="Logo.png" height="95px" width="120px"></td>
                <td style="text-align: right;">
                    &nbsp<a href="UserHome.php">Home</a>&nbsp
                    &nbsp<a href="UserViewProfile.php" style="color:red">View Profile</a>&nbsp
                    &nbsp<a href="UserUpdateProfile.php">Update Profile</a>&nbsp
                    &nbsp<a href="Login.php">Logout</a>&nbsp
                </td>
            </tr>
        </table>
    </div>

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
$q="SELECT * FROM userdetails WHERE UserNo=$uno";
//print($q);
$result=$conn->query($q);
//print($result->num_rows);
  $UserNo;
  $Name;
  $Gender;
  $DOB;
  $Edu;
  $Email;
  $Phone;
  $Username;


while ($row=$result-> fetch_assoc())
{
    // print("<br>");
    //print($row ["UserNo"]);
    // print($row["name"]);
    // print($row["gender"]);
    // print($row["date"]);
    // print($row["edu"]);print($row["email"]);
    // print($row["phone"]);
    // print($row["username"]);
    // print($row["password"]);
    // print("<br>");
$UserNo=$row["UserNo"];
  $Name=$row["Name"];
  $Gender=$row["Gender"];
  $DOB=$row["DOB"];
  $Education=$row["Edu"];
  $Email=$row["Email"];
  $Phone=$row["Phone"];
  $Username=$row["Username"];

}
$conn->close();

?>





    <div name="content" id="content" style="height: 560px;">
        <br><br><br><br><br><br><br><br>
        <table align="center" border="1" style="border-collapse: collapse;width:50%">
            <tr>
                <th colspan="2" style="font-size: xx-large;">Profile Details
            </tr>
            <tr>
                <td>UserNo</td>
                <td><?php print($UserNo) ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php print($Name) ?></td>
            </tr>
            <tr>
                <td>Gender</td>

                <td><?php print($Gender) ?></td>

            </tr>
            <tr>
                <td>DOB</td>
                <td><?php print($DOB) ?></td>
            </tr>
            <tr>
                <td>Education</td>
                <td><?php print($Education) ?></td>

            </tr>
            <tr>
                <td>Email</td>
                <td><?php print($Email) ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php print($Phone) ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php print($Username) ?></td>
            </tr>


            </tr>
        </table>
    </div>
    <div name="footer" id="footer" style="background-color: skyblue; height: 100px;">
        <br><br>
        <p style="text-align: center;">@SDC</p>
    </div>
</body>

</html>
</html>