<?php 
    if(isset($_POST['save'])){
        include '../koneksi.php';
    
        $query = "INSERT INTO `medicals_230012` SET 
        pet_id_230012 = '$_POST[pet_id_230012]',
        doctor_id_230012 = '$_POST[doctor_id_230012]',
        symptom_230012 = '$_POST[symptom_230012]',
        diagnose_230012 = '$_POST[diagnose_230012]',
        treatment_230012 = '$_POST[treatment_230012]',
        cost_230012 = '$_POST[cost_230012]'";
    
        $create = mysqli_query($db_con, $query);

        if($create){
            echo "<script>alert('Medical Updated Successfully !')</script>";
        } else {
            echo "<script>alert('Medical Update Failed !')</script>";
        }
    }
?>

<script>window.location.replace("medicals_230012.php?pet_id=<?= $_POST['pet_id_230012']; ?>");</script>