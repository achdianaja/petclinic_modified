<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
}

if (isset($_POST['save'])) {
    include '../koneksi.php';

    $query = "INSERT INTO `pets_230012` (pet_name_230012, pet_type_230012, pet_gender_230012, pet_age_230012, pet_owner_230012, pet_address_230012, pet_phone_230012) 
                  VALUES ('$_POST[pet_name_230012]', '$_POST[pet_type_230012]', '$_POST[pet_gender_230012]', '$_POST[pet_age_230012]', '$_POST[pet_owner_230012]', '$_POST[pet_address_230012]', '$_POST[pet_phone_230012]') ";

    $create = mysqli_query($db_con, $query);

    if ($create) {
        echo "<script>alert('Pet Added Successfully !')</script>";
    } else {
        echo "<script>alert('Pet Add Failed !')</script>";
    }
}
?>

<script>
    window.location.replace("read_pet_230012.php")
</script>