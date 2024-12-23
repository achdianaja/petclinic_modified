<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
}

if ($_SESSION['usertype'] != 'Manager') {
    echo "<script>alert('Access Forbidden !');window.location.replace('../index.php')</script>";
}

if (isset($_POST['save'])) {
    include '../koneksi.php';

    $password = password_hash($_POST['user_type_230012'], PASSWORD_DEFAULT);

    $query = "INSERT INTO `users_230012` (username_230012, password_230012, user_type_230012, fullname_230012) 
                  VALUES ('$_POST[username_230012]', '$password', '$_POST[user_type_230012]', '$_POST[fullname_230012]') ";

    $create = mysqli_query($db_con, $query);

    if ($create) {
        echo "<script>alert('User Added Successfully !')</script>";
    } else {
        echo "<script>alert('User Add Failed !')</script>";
    }
}
?>

<script>
    window.location.replace("read_user_230012.php")
</script>