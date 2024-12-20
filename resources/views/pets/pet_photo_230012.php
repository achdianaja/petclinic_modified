<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pet Clinic iKi</h1>
    <hr>
    <h3>Change Pet Photo</h3>
    <?php 
        include '../koneksi.php';

        $query = "SELECT * FROM pets_230012 WHERE pet_id_230012='$_GET[id]'";

        $pet = mysqli_query($db_con, $query);

        $data = mysqli_fetch_assoc($pet);
    ?>

    <form action="pet_upload_230012.php" method="post" >
        <table>
            <tr>
                <td></td>
                <td><img src="../public/images/pets/<?= $data['pet_photo_230012'] ?>" alt="" width="100" height="auto" style="border-radius: 100%;"></td>
            </tr>
            <tr>
                <td>New Photo</td>
                <td>: <input type="file" name="new_photo_230012" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="upload" value="UPLOAD">
                    <input type="hidden" name="pet_photo_230012" value="<?= $data['pet_photo_230012'] ?>">
                    <input type="hidden" name="pet_id_230012" value="<?= $data['pet_id_230012'] ?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_pet_230012.php">CANCEL</a></p>
</body>

</html>