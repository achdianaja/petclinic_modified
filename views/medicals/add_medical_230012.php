<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
}

include '../koneksi.php';

$query = "SELECT * FROM pets_230012 WHERE pet_id_230012='$_GET[pet_id]'";

$pet = mysqli_query($db_con, $query);

$data1 = mysqli_fetch_assoc($pet);

$querymed = "SELECT * FROM medicals_230012 WHERE pet_id_230012='$_GET[pet_id]'";
$medicals = mysqli_query($db_con, $querymed);

$querydoc = "SELECT * FROM doctors_230012";
$doctors = mysqli_query($db_con, $querydoc);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic iKi</title>
</head>

<body>
    <h1>Pet Clinic iKi</h1>
    <hr>
    <h3>Form Add Medical</h3>

    <table>
        <tr>
            <td>PetId/Name</td>
            <td>:</td>
            <td><?= $data1['pet_id_230012'] ?> / <?= $data1['pet_name_230012'] ?></td>
        </tr>
        <tr>
            <td>PetType/Gender/Age</td>
            <td>:</td>
            <td><?= $data1['pet_type_230012'] ?> / <?= $data1['pet_gender_230012'] ?> / <?= $data1['pet_age_230012'] ?> month(s)</td>
        </tr>
        <tr>
            <td>Owner</td>
            <td>:</td>
            <td><?= $data1['pet_owner_230012'] ?> / <?= $data1['pet_address_230012'] ?> / <?= $data1['pet_phone_230012'] ?></td>
        </tr>
    </table>
    <hr>

    <form action="create_medical_230012.php" method="post">
        <table>
            <tr>
                <td>Doctor</td>
                <td>
                    <select name="doctor_id_230012" id="">
                        <option value="" disabled selected>Choose</option>
                        <?php foreach ($doctors as $doc): ?>
                            <option value="<?= $doc['doctor_id_230012'] ?>"><?= $doc['doctor_name_230012'] ?></option>
                        <?php endforeach ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Sympton</td>
                <td><textarea name="symptom_230012" id=""></textarea></td>
            </tr>
            <tr>
                <td>Diagnose</td>
                <td><textarea name="diagnose_230012" id=""></textarea></td>
            </tr>
            <tr>
                <td>Treatment</td>
                <td><textarea name="treatment_230012" id=""></textarea></td>
            </tr>
            <tr>
                <td>Cost ($)</td>
                <td><input type="number" name="cost_230012"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="save" required>
                    <input type="reset" value="Reset" required>
                    <input type="hidden" name="pet_id_230012" value="<?= $data1['pet_id_230012'] ?>">
                </td>
            </tr>
        </table>

        <br>
        <a href="medicals_230012.php?pet_id=<?= $data1['pet_id_230012'] ?>">CANCEL</a>
    </form>
</body>

</html>