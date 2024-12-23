<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
}

if (isset($_GET['id'])) {
    include '../koneksi.php';

    $query = "DELETE FROM pets_230012 WHERE pet_id_230012 = '$_GET[id]'";

    $delete = mysqli_query($db_con, $query);

    if ($delete) {
        echo "<script>alert('Pet Deleted Successfully !')</script>";
    } else {
        echo "<script>alert('Pet Delete Failed !')</script>";
    }
}
?>

<script>
    window.location.replace("read_pet_230012.php")
</script>