<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../auth/form_login_230012.php");
    exit;
}

if (isset($_POST['save'])) {
    include '../koneksi.php';
    $doctor_id = $_POST['doctor_id_230012'];
    $name = $_POST['doctor_name_230012'];
    $gender = $_POST['doctor_gender_230012'];
    $address = $_POST['doctor_address_230012'];
    $phone = $_POST['doctor_phone_230012'];
    $folder = '../public/images/doctors/';
    $photo_name = $_FILES['new_photo_230012']['name'];
    $photo_tmp = $_FILES['new_photo_230012']['tmp_name'];

    $query = "UPDATE doctors_230012 SET 
        doctor_name_230012 = '$name',
        doctor_gender_230012 = '$gender',
        doctor_address_230012 = '$address',
        doctor_phone_230012 = '$phone'
        WHERE doctor_id_230012 = '$doctor_id'";

    $update = mysqli_query($db_con, $query);

    if ($update) {
        if (!empty($photo_name)) {
            $new_photo_path = $folder . $photo_name;
            if (move_uploaded_file($photo_tmp, $new_photo_path)) {
                $query = "UPDATE doctors_230012 SET doctor_photo_230012='$photo_name' WHERE doctor_id_230012='$doctor_id'";
                $upload = mysqli_query($db_con, $query);

                if ($upload) {
                    if ($_POST['doctor_photo_230012'] !== 'default.jpg') {
                        @unlink($folder . $_POST['doctor_photo_230012']);
                    }
                    $success_message = "Photo updated successfully!";
                }
            }
        } else {
            $success_message = "Doctor details updated successfully!";
        }

        echo "<script>alert('$success_message'); window.location.replace('read_doctor_230012.php');</script>";
    } else {
        echo "<script>alert('Doctor update failed!'); window.history.back();</script>";
    }
}
