<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
}

if ($_SESSION['usertype'] != 'Manager') {
    echo "<script>alert('Access Forbidden !');window.location.replace('../index.php')</script>";
}

include '../koneksi.php';

$query = "SELECT * FROM users_230012 WHERE user_id_230012='$_GET[id]'";

$user = mysqli_query($db_con, $query);

$data = mysqli_fetch_assoc($user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets CLinic iKi</title>
</head>

<body>
    <h1>Pet Clinic iKi</h1>
    <hr>
    <h3>Form Edit User</h3>

    <form action="update_user_230012.php" method="POST">
        <table>
            <tr>
                <td>userame</td>
                <input type="hidden" name="user_id_230012" value="<?= $data['user_id_230012'] ?>">
                <td><input type="text" name="username_230012" id="" required value="<?= $data['username_230012'] ?>"></td>
            </tr>
            <!-- <tr>
                <td>Password</td>
                <td><input type="text" name="password_230012" id="pass" required></td>
            </tr> -->
            <tr>
                <td>User Type</td>
                <td>
                    <input type="radio" name="user_type_230012" value="Staff" required <?php echo ($data['user_type_230012'] == 'Staff') ? 'checked' : ''  ?>> Staff
                    <input type="radio" name="user_type_230012" value="Manager" required <?php echo ($data['user_type_230012'] == 'Manager') ? 'checked' : ''  ?>> Manager
                </td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="fullname_230012" id="" required value="<?= $data['fullname_230012'] ?>"></td>
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