<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet CLinic iKi</title>
</head>

<body>
    <h1>Pet Clinic iKi</h1>
    <hr>
    <h3>Form Add User</h3>

    <form action="create_user_230012.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username_230012" id="" required></td>
            </tr>
            <tr>
                <td>User Type</td>
                <td>
                    <input type="radio" name="user_type_230012" value="Staff" required> Staff
                    <input type="radio" name="user_type_230012" value="Manager" required> Manager
                </td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="fullname_230012" id="" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="save" required>
                    <input type="reset" value="Reset" required>
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_user_230012.php">CANCEL</a></p>
</body>

</html>