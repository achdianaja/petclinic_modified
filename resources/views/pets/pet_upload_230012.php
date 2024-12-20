<?php
if (isset($_POST['upload'])) {
    include '../koneksi.php';

    $folder = '../public/images/pets/';
    if (move_uploaded_file($_FILES['new_photo_230012']['tmp_name'], $folder . $_FILES['new_photo_230012']['name'])) {
        $photo = $_FILES['new_photo_230012']['name'];

        $query = "UPDATE pets_230012 SET pet_photo_230012='$photo' WHERE pet_id_230012='$_POST[pet_id_230012]'";

        $upload = mysqli_query($db_con, $query);

        if ($upload) {
            if ($_POST['pet_photo_230012'] !== 'default.png') unlink($folder . $_POST['pet_photo_230012']);
            echo "<script>alert('Change Photo Success !');window.location.replace('read_pet_230012.php')</script>";
        } else {
            echo "<script>alert('Change Photo Failed !');window.location.replace('pet_photo_230012.php?id=$_POST[pet_id_230012]')</script>";
        }
    } else {
        echo "<script>alert('Upload Photo Success !');window.location.replace('pet_photo_230012.php?id=$_POST[pet_id_230012]')</script>";
    }
}
