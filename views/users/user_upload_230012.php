<?php
session_start();
if (isset($_POST['upload'])) {
    include '../koneksi.php';

    $folder = '../public/images/users/';
    $new_photo = $_FILES['new_photo_230012']['name'];

    if (move_uploaded_file($_FILES['new_photo_230012']['tmp_name'], $folder . $new_photo)) {
        $query = "UPDATE users_230012 SET user_photo_230012 = '$new_photo' WHERE user_id_230012 = '$_SESSION[userid]' ";

        $upload = mysqli_query($db_con, $query);

        if ($upload) {
            if ($_SESSION['user_photo'] !== 'default.jpg') {
                unlink($folder . $_SESSION['user_photo']);
            }
            
            $_SESSION['user_photo'] = $new_photo;

            echo "<script>alert('Change Photo Success !');window.location.replace('user_photo_230012.php')</script>";
        } else {
            echo "<script>alert('Change Photo Failed !');window.location.replace('user_photo_230012.php')</script>";
        }
    } else {
        echo "<script>alert('Upload Failed !');window.location.replace('user_photo_230012.php')</script>";
    }
}
