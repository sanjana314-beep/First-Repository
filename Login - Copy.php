<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
    function loginvalidation() {
        if (document.getElementById("n").value.trim() == "") {
            alert("Please enter Name!!");
            document.getElementById("n").focus();
            document.getElementById("n").style.backgroundColor = "red";
        } else if (document.getElementById("n").value.trim().length < 3) {
            alert("The Name should be minimum 3 characters long!!");
            document.getElementById("n").focus();
            document.getElementById("n").style.backgroundColor = "red";
        } else if (document.getElementById("p").value == "") {
            alert("Please enter Password!!");
            document.getElementById("p").focus();
            document.getElementById("p").style.backgroundColor = "white";
            document.getElementById("p").style.backgroundColor = "red";
        } else {
            document.getElementById("loginfrm").submit();
        }
    }
    </script>

</head>

<body>
    <div name="header" id="header" style="background-color: skyblue; height: 100px;" ;>
        <table width="100%">
            <tr>
                <td><img src="Logo.png" height="95px" width="120px"></td>
                <td style="text-align: right;">
                    <a href="Index.html">Home</a>&nbsp
                    &nbsp<a href="Register.php">Register</a>
                </td>
            </tr>
        </table>
    </div>
    <div name="content" id="content" style="height: 560px;">
        <br><br><br><br><br><br><br><br>
        <form name="loginfrm" id="loginfrm" action="LoginHandler.php" method="get">
            <table align="center" border="1" style="border-collapse: collapse;">
                <tr>
                    <th colspan="2" style="font-size: xx-large;">Login
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="n" id="n"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="p" id="p"></td>
                </tr>
                <tr>
                    <td><button type="reset">Reset</button></td>
                    <td>
                        <button type="button" onclick="loginvalidation()">Login</button></a>
                    </td>
                </tr>
            </table>
            <div style="color: red; text-align: center;">
                <?php
                     if (isset($_GET['msg']))
                        {
                            echo $_GET['msg'];
                        }
                ?>
            </div>
        </form>
    </div>
    <div name="footer" id="footer" style="background-color: skyblue; height: 100px;">
        <br><br>
        <p style="text-align: center;">@SDC</p>
    </div>
</body>

</html>