<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script>
    function registervalidation() {
        if (document.getElementById("n").value.trim() == "") {
            alert("Please enter Name!!");
            document.getElementById("n").focus();
            document.getElementById("n").style.backgroundColor = "red";
        } else if (document.getElementById("n").value.trim().length < 3) {
            alert("The Name should be minimum 3 characters long!!");
            document.getElementById("n").focus();
            document.getElementById("n").style.backgroundColor = "red";
        } else if (document.getElementById("d").value.trim() == "") {
            alert("Please enter Date Of Birth!!");
            document.getElementById("d").focus();
            document.getElementById("d").style.backgroundColor = "red";
        } else if (document.getElementById("e").value.trim() == "") {
            alert("Please enter Education!!");
            document.getElementById("e").focus();
            document.getElementById("e").style.backgroundColor = "red";
        } else if (document.getElementById("em").value.trim() == "") {
            alert("Please enter Email!!");
            document.getElementById("em").focus();
            document.getElementById("em").style.backgroundColor = "red";
        } else if (document.getElementById("nu").value.trim() == "") {
            alert("Please enter Phone Number!!");
            document.getElementById("nu").focus();
            document.getElementById("nu").style.backgroundColor = "red";
        } else if (document.getElementById("u").value.trim() == "") {
            alert("Please enter Username!!");
            document.getElementById("u").focus();
            document.getElementById("u").style.backgroundColor = "red";
        } else if (document.getElementById("p").value.trim() == "") {
            alert("Please enter Password!!");
            document.getElementById("p").focus();
            document.getElementById("p").style.backgroundColor = "red";
        } else {
            document.getElementById("registerfrm").submit();
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
                    &nbsp<a href="Login.php">Login</a>
                </td>
            </tr>
        </table>
    </div>
    <div name="content" id="content" style="height: 560px;">
        <br><br><br><br><br><br><br><br>
        <form name="registerfrm" id="registerfrm" action="RegisterHandler.php" method="get">
            <table align="center" border="1" style="border-collapse: collapse;">
                <tr>
                    <th colspan="2" style="font-size: xx-large;">Register
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="n" id="n"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" id="female" name="g" value="female">Female<br>
                        <input type="radio" id="male" name="g" value="male">Male
                    </td>
                </tr>
                <tr>
                    <td>DOB</td>
                    <td><input type="date" name="d" id="d"></td>
                </tr>
                <tr>
                    <td>Education</td>
                    <td><select name="e" id="e">
                            <option></option>
                            <option>SSLC</option>
                            <option>Plus two</option>
                            <option>Graduate</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="em" id="em"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="number" name="nu" id="nu"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="u" id="u"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="p" id="p"></td>
                </tr>
                <tr>
                    <td><button type="reset">Reset</button></td>
                    <td><button type="button" onclick="registervalidation()">Register</button></td>
                </tr>
            </table>
        </form>
    </div>
    <div name="footer" id="footer" style="background-color: skyblue; height: 100px;">
        <br><br>
        <p style="text-align: center;">@SDC</p>
    </div>
</body>

</html>