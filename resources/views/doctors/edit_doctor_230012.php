<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
}

include '../koneksi.php';

$query = "SELECT * FROM doctors_230012 WHERE doctor_id_230012='$_GET[id]'";

$doctor = mysqli_query($db_con, $query);

$data = mysqli_fetch_assoc($doctor);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets CLinic iKi</title>
</head>

<body>
    <h1>Pet Clinic iKi</h1>
    <hr>
    <h3>Form Edit doctor</h3>

    <form action="update_doctor_230012.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name</td>
                <input type="hidden" name="doctor_id_230012" value="<?= $data['doctor_id_230012'] ?>">
                <td><input type="text" name="doctor_name_230012" id="" required value="<?= $data['doctor_name_230012'] ?>"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="doctor_gender_230012" value="Male" required <?php echo ($data['doctor_gender_230012'] == 'Male') ? 'checked' : ''  ?>> Male
                    <input type="radio" name="doctor_gender_230012" value="Female" required <?php echo ($data['doctor_gender_230012'] == 'Female') ? 'checked' : ''  ?>> Female
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="doctor_address_230012" id="" required><?= $data['doctor_address_230012'] ?></textarea></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="doctor_phone_230012" id="" required value="<?= $data['doctor_phone_230012'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><img src="../public/images/doctors/<?= $data['doctor_photo_230012'] ?>" alt="" width="100" height="auto"></td>
            </tr>
            <tr>
                <td>New Photo</td>
                <td>: <input type="file" name="new_photo_230012" ></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="save" required>
                    <input type="reset" value="RESET" required>
                    <input type="hidden" name="doctor_photo_230012" value="<?= $data['doctor_photo_230012'] ?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_doctor_230012.php">CANCEL</a></p>
</body>

</html>