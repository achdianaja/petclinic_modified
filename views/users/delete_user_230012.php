<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
}

if ($_SESSION['usertype'] != 'Manager') {
    echo "<script>alert('Access Forbidden !');window.location.replace('../index.php')</script>";
}

if (isset($_GET['id'])) {
    include '../koneksi.php';

    $query = "DELETE FROM users_230012 WHERE user_id_230012 = '$_GET[id]'";

    $update = mysqli_query($db_con, $query);

    if ($update) {
        echo "<script>alert('User Deleted Successfully !')</script>";
    } else {
        echo "<script>alert('User Delete Failed !')</script>";
    }
}
?>

<script>
    window.location.replace("read_user_230012.php")
</script>