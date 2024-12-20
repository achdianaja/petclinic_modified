<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
}

if (isset($_POST['save'])) {
    include '../koneksi.php';

    $query = "INSERT INTO `doctors_230012` (doctor_name_230012, doctor_gender_230012, doctor_address_230012, doctor_phone_230012, doctor_photo_230012) 
                  VALUES ('$_POST[doctor_name_230012]', '$_POST[doctor_gender_230012]', '$_POST[doctor_address_230012]', '$_POST[doctor_phone_230012]', '$_POST[doctor_photo_230012]') ";

    $create = mysqli_query($db_con, $query);

    if ($create) {
        echo "<script>alert('doctor Added Successfully !')</script>";
    } else {
        echo "<script>alert('doctor Add Failed !')</script>";
    }
}
?>

<script>
    window.location.replace("read_doctor_230012.php")
</script>