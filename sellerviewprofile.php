<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <div name="header" id="header" style="background-color: rgb(77, 4, 4); height: 100px;" ;>
        <table width="100%">
            <tr>
                <td><img src="Logo.png" height="95px" width="120px"></td>
                <td style="text-align: right;">
                    &nbsp<a href="sellerhome.php">Home</a>&nbsp
                    &nbsp<a href="sellerViewProfile.php" style="color:blue"> sellerView Profile</a>&nbsp
                    &nbsp<a href="sellerUpdateProfile.php"> sellerUpdate Profile</a>&nbsp
                    &nbsp<a href="loginseller.php">Logout</a>&nbsp
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
// print("<br>");
session_start();
$uno=$_SESSION["ssno"];
$q="SELECT * FROM sellerdetails WHERE sellerno=$uno";
//print($q);
$result=$conn->query($q);
//print($result->num_rows);
  $sellerno;
  $name;
  $gender;
  $dob;
  $email;
  $phone;
  $sellername;


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
$sellerno=$row["sellerno"];
  $name=$row["name"];
  $gender=$row["gender"];
  $dob=$row["dob"];
  $email=$row["email"];
  $phone=$row["phone"];
  $sellername=$row["sellername"];

}
$conn->close();

?>





    <div name="content" id="content" style="height: 560px;">
        <br><br><br><br><br><br><br><br>
        <table align="center" border="1" style="border-collapse: collapse;width:50%">
            <tr>
                <th colspan="2" style="font-size: xx-large;"> User Profile Details
            </tr>
            <tr>
                <td>sellerno</td>
                <td><?php print($sellerno) ?></td>
            </tr>
            <tr>
                <td>name</td>
                <td><?php print($name) ?></td>
            </tr>
            <tr>
                <td> gender</td>

                <td><?php print( $gender) ?></td>

            </tr>
            <tr>
                <td>dob</td>
                <td><?php print($dob) ?></td>
            </tr>
            <tr>
                <td>email</td>
                <td><?php print($email) ?></td>
            </tr>
            <tr>
                <td>phone</td>
                <td><?php print($phone) ?></td>
            </tr>
            <tr>
                <td>sellername</td>
                <td><?php print($sellername) ?></td>
            </tr>


            </tr>
        </table>
    </div>
    <div name="footer" id="footer" style="background-color:  rgb(77, 4, 4); height: 100px;">
        <br><br>
        <p style="text-align: center;color:white">@SDC</p>
    </div>
</body>

</html>
</html>