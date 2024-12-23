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
    <title>Document</title>
</head>

<body>
    <h1>Pet Clinic iKi</h1>
    <hr>
    <h3>Change Photo</h3>

    <form action="user_upload_230012.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td></td>
                <td><img src="../public/images/users/<?= $_SESSION['user_photo'] ?>" alt="" width="100" height="auto" style="border-radius: 100%;"></td>
                
            </tr>
            <tr>
                <td>New Photo</td>
                <td>: <input type="file" name="new_photo_230012" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="upload" value="UPLOAD">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="../index.php">CANCEL</a></p>
</body>

</html>