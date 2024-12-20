<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
}

include '../koneksi.php';
$i = 1;
$data = mysqli_query($db_con, "SELECT * FROM pets_230012")
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
    <h3>Pet List</h3>

    <p><a href="add_pet_230012.php">Add New Pet</a></p>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Age (month) </th>
            <th>Owner</th>
            <th>Address</th>
            <th>Phone</th>
            <th colspan="2">Action</th>
        </tr>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><a href="../medicals/medicals_230012.php?pet_id=<?php echo $item['pet_id_230012'] ?>"><?php echo $item['pet_name_230012'] ?></a></td>
                    <td align="center">
                        <img src="../public/images/pets/<?php echo $item['pet_photo_230012'] ?>" alt="" width="50" height="auto" style="border-radius: 100%;"><br>
                        <a href="pet_photo_230013.php?id=<?php echo $item['pet_id_230012'] ?>">Change Photo</a>
                    </td>
                <td><?php echo $item['pet_type_230012'] ?></td>
                <td><?php echo $item['pet_gender_230012'] ?></td>
                <td><?php echo $item['pet_age_230012'] ?></td>
                <td><?= $item['pet_owner_230012'] ?></td>
                <td><?= $item['pet_address_230012'] ?></td>
                <td><?= $item['pet_phone_230012'] ?></td>
                <td>
                    <a href="edit_pet_230012.php?id=<?= $item['pet_id_230012'] ?>">Edit Pet</a>
                </td>
                <td>
                    <a href="delete_pet_230012.php?id=<?= $item['pet_id_230012'] ?>" onclick="return confirm('Are you sure Delete this Pet?')">Delete Pet</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

    <p><a href="../index.php">BACK TO HOME</a></p>
</body>

</html>