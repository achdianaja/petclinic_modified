<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('resources/views/auth/form_login_230012.php')</script>";
}
$title = "Home";
include "resources/partials/head.php";
?>

<h1>Pet Clinic iKi</h1>
<hr>
<h3>Welcome to the clinic</h3>

<ul>
    <li><a href="pets/read_pet_230012.php">Pet List</a></li>
    <li><a href="doctors/read_doctor_230012.php">Doctor List</a></li>
    <?php if ($_SESSION['usertype'] == 'Manager') { ?>
        <li><a href="resources/views/users/read_user_230012.php">User List</a></li>
    <?php } ?>
    <li><a href="report/monthly_report_230012.php">Monthly Report</a></li>

    <hr>

    <?= $_SESSION['user_photo'] ?>

    <p>Welcome <strong><?= $_SESSION['fullname'] ?></strong>, you are logged in as <strong><?= $_SESSION['usertype'] ?></strong></p>
    <img src="public/images/users/<?= $_SESSION['user_photo'] ?>" alt="" width="150" height="auto" style="border-radius: 100%;">
    <li><a href="resources/views/users/user_photo_230012.php">Change Photo</a></li>
    <li><a href="resources/views/auth/change_password_230012.php">Change Password</a></li>
    <li><a href="resources/views/auth/logout_230012.php">Logout</a></li>
</ul>


<?php include "resources/partials/footer.php"; ?>