<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
}

if ($_SESSION['usertype'] != 'Manager') {
    echo "<script>alert('Access Forbidden !');window.location.replace('../index.php')</script>";
}

include '../../../koneksi.php';
$i = 1;
$data = mysqli_query($db_con, "SELECT * FROM users_230012")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet clinic iKi </title>
</head>

<body>

    <h1>Pet Clinic iKi</h1>
    <hr>
    <h3>User List</h3>

    <p><a href="add_user_230012.php">Add New User</a></p>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>User Type</th>
            <th>Full Name</th>
            <th>Photo</th>
            <th colspan="3">Action</th>
        </tr>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $item['username_230012'] ?></td>
                <td><?php echo $item['user_type_230012'] ?></td>
                <td><?= $item['fullname_230012'] ?></td>
                <td><img src="../../../public/images/users/<?php echo $item['user_photo_230012'] ?>" alt="" width="50" height="auto" style="border-radius: 100%;"></td>
                <td><a href="edit_user_230012.php?id=<?= $item['user_id_230012'] ?>">Edit User</a></td>
                <td><a href="delete_user_230012.php?id=<?= $item['user_id_230012'] ?>" onclick="return confirm('Are you sure Delete this User?')">Delete User</a></td>
                <td><a href="../auth/reset_password_230012.php?id=<?= $item['user_id_230012'] ?>&type=<?= $item['user_type_230012'] ?>" onclick="return confirm('Are you sure reset the password?')">Reset Password</a></td>
            </tr>
        <?php endforeach ?>
    </table>

    <p><a href=" ../index.php">BACK TO HOME</a></p>
</body>

</html>