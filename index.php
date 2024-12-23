<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('views/auth/form_login_230012.php')</script>";
}
$title = "Home";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Home</title>
</head>

<body>
    <?php
    include "components/navbar.php";
    include "components/sidebar.php";
    ?>
    <main class="content shifted" id="content">
        <h1>Pet Clinic iKi</h1>
        <hr>
        <h3>Welcome to the clinic</h3>

        <ul>
            <li><a href="views/pets/read_pet_230012.php">Pet List</a></li>
            <li><a href="doctors/read_doctor_230012.php">Doctor List</a></li>
            <?php if ($_SESSION['usertype'] == 'Manager') { ?>
                <li><a href="views/users/read_user_230012.php">User List</a></li>
                <li><a href="report/monthly_report_230012.php">Monthly Report</a></li>
            <?php } ?>

            <hr>

            <?= $_SESSION['user_photo'] ?>

            <p>Welcome <strong><?= $_SESSION['fullname'] ?></strong>, you are logged in as <strong><?= $_SESSION['usertype'] ?></strong></p>
            <img src="public/images/users/<?= $_SESSION['user_photo'] ?>" alt="" width="150" height="auto" style="border-radius: 100%;">
            <li><a href="views/users/user_photo_230012.php">Change Photo</a></li>
            <li><a href="views/auth/change_password_230012.php">Change Password</a></li>
            <li><a href="views/auth/logout_230012.php">Logout</a></li>
        </ul>
    </main>
    <script src="public/js/sidebar.js"></script>
</body>

</html>
