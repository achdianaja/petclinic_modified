<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        echo "<script>alert('Please Login First !');window.location.replace('../auth/form_login_230012.php')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet CLinic iKi</title>
</head>

<body>
    <h1>Pet Clinic iKi</h1>
    <hr>
    <h3>Form Add Pet</h3>

    <form action="create_pet_230012.php" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="pet_name_230012" id="" required></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="pet_type_230012" id="" required>
                        <option value="" selected disabled>Choose</option>
                        <option value="Cat">Cat</option>
                        <option value="Dog">Dog</option>
                        <option value="Bird">Bird</option>
                        <option value="Kontol">Reptile</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="pet_gender_230012" value="Male" required> Male
                    <input type="radio" name="pet_gender_230012" value="Female" required> Female
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="pet_age_230012" id="" required></td>
            </tr>
            <tr>
                <td>Owner</td>
                <td><input type="text" name="pet_owner_230012" id="" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="pet_address_230012" id="" required></textarea></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="pet_phone_230012" id="" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="SAVE" name="save" required>
                    <input type="reset" value="Reset" required>
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_pet_230012.php">CANCEL</a></p>
</body>

</html>