<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesi.css">
    <title>SignIn</title>
</head>
<body>


    <form method="POST" action="">
        <table border="0" align="center" cellpadding="5">
            <tr>
                <td align="center">UserName</td>
                <td input type="TEXT" name="u" required></td>
            </tr>
            <tr>
                <td align="center">Password</td>
                <td input type="PASSWORD" name="p" required></td>
            </tr>
            <tr>
                <td align="center">Repeat Passowrd</td>
                <td input type="PASSWORD" name="p2" required></td>
            </tr>
            <tr>
                <td align="center">Email</td>
                <td input type="EMAIL" name="e" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="SUBMIT" name="submit" value="Sign Up" required/></td>
            </tr>
        </table>
    </form>
    <!-- <div class="sign-box">
        <div class="signin-form">
            <h2>Sign In</h2>
            <div class="signin-input-box" method = "POST" action="">
                <input type="text" required="required" name="e">
                <span>E-Mail</span>
                <i></i>
            </div>
            <div class="signin-input-box" method = "POST" action="">
                <input type="password" required="required" name="pas">
                <span>Password</span>
                <i></i>
            </div>
            <div class="btns">
                <a href="#">Sign Up</a>
            </div>
            <input type="submit" value="Sign In">
        </div> -->

    </div>

</body>
</html>