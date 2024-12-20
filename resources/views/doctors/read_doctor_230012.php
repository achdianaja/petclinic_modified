<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
}

include '../koneksi.php';
$i = 1;
$data = mysqli_query($db_con, "SELECT * FROM doctors_230012")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet clinic iKi </title>
</head>

<body>

    <h1>Pet Clinic iKi</h1>
    <hr>
    <h3>Doctor List</h3>

    <p><a href="add_doctor_230012.php">Add New doctor</a></p>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Photo</th>
            <th colspan="2">Action</th>
        </tr>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $item['doctor_name_230012'] ?></td>
                <td><?php echo $item['doctor_gender_230012'] ?></td>
                <td><?= $item['doctor_address_230012'] ?></td>
                <td><?= $item['doctor_phone_230012'] ?></td>
                <td><img src="../public/images/doctors/<?= $item['doctor_photo_230012'] ?>" alt="" width="50" height="auto" style="border-radius: 100%;"></td>
                <td><a href="edit_doctor_230012.php?id=<?= $item['doctor_id_230012'] ?>">Edit Doctor</a></td>
                <td><a href="delete_doctor_230012.php?id=<?= $item['doctor_id_230012'] ?>" onclick="return confirm('Are you sure Delete this Doctor?')">Delete Doctor</a></td>

            </tr>
        <?php endforeach ?>
    </table>

    <p><a href="../index.php">BACK TO HOME</a></p>
</body>

</html>