<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <div name="header" id="header" style="background-color:rgb(77, 4, 4); height: 100px;" ;>
        <table width="100%">
            <tr>
                <td><img src="Logo.png" height="95px" width="120px"></td>
                <td style="text-align: right;">
                    <a href="sellerhome.php" style="color:blue">Home</a>&nbsp
                    &nbsp<a href="sellerViewProfile.php">seller View Profile</a>&nbsp
                    &nbsp<a href="sellerUpdateProfile.php"> seller Update Profile</a>&nbsp
                    &nbsp<a href="loginseller.php">Logout</a>&nbsp
                    &nbsp<?php
                        session_start();
                        if(isset($_SESSION["ssname"])){
                            print($_SESSION["ssname"]);
                        }
                    ?>&nbsp
                </td>
            </tr>
        </table>
    </div>
    <div name="content" id="content" style="height: 560px;">
        <br><br><br><br><br><br><br><br><br><br><br>
        <h1 style="text-align: center;">WELCOME TO SELLER HOME</h1>
    </div>
    <div name="footer" id="footer" style="background-color: rgb(77, 4, 4);height: 100px;">
        <br><br>
        <p style="text-align: center;color:white;">@SDC</p>
    </div>
</body>

</html>