<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('auth/form_login_230012.php')</script>";
}
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
    <h3>Monthly Report</h3>

    <?php
    $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $year = date('Y');
    ?>

    <form action="">
        <select name="month" id="">
            <option value="">Month</option>
            <?php for ($m = 1; $m <= 12; $m++) { ?>
                <option value="<?= $m ?>" <?= (isset($_GET['month']) && $_GET['month'] == $m) ? 'selected' : '' ?>>
                    <?= $months[$m - 1] ?>
                </option>
            <?php } ?>
        </select>

        <select name="year" id="">
            <option value="">Year</option>
            <?php for ($y = 0; $y < 2; $y++) { ?>
                <option value="<?= $year - $y ?>" <?= (isset($_GET['year']) && $_GET['year'] == $year - $y) ? 'selected' : '' ?>>
                    <?= $year - $y ?>
                </option>
            <?php } ?>
        </select>
s
        <input type="submit" value="View Report">
    </form>

    <?php if (isset($_GET['year'])) {
        include '../koneksi.php';

        $query = "SELECT m.mr_date_230012, d.doctor_name_230012, p.pet_name_230012, p.pet_owner_230012, m.cost_230012 
        FROM medicals_230012 AS m, doctors_230012 AS d, pets_230012 AS p 
        WHERE m.doctor_id_230012 = d.doctor_id_230012 AND m.pet_id_230012 = p.pet_id_230012 
        AND MONTH(m.mr_date_230012) = '$_GET[month]' AND YEAR(m.mr_date_230012) = '$_GET[year]'";

        $report = mysqli_query($db_con, $query);
    ?>


        <h4>Report Periode <?= $months[$_GET['month'] - 1] ?> - <?= $_GET['year'] ?></h4>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Doctor</th>
                <th>Pet</th>
                <th>Owner</th>
                <th>Pay ($)</th>
            </tr>

            <?php if (mysqli_num_rows($report) > 0) {
                $i = 1;
                $total = 0;
                foreach ($report as $data):
                    $total = $total + $data['cost_230012'];
            ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $data['mr_date_230012'] ?></td>
                        <td><?php echo $data['doctor_name_230012'] ?></td>
                        <td><?php echo $data['pet_name_230012'] ?></td>
                        <td><?php echo $data['pet_owner_230012'] ?></td>
                        <td><?php echo number_format($data['cost_230012'], 0, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="6" align="right"><strong>Total : $ <?= number_format($total, 0, ',', '.') ?></strong></td>
                </tr>
            <?php  } else { ?>
                <tr>
                    <td colspan="6" align="center">No Record !</td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>

    <p><a href="../index.php">BACK TO HOME</a></p>
</body>

</html>