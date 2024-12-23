<div class="sidebar active" id="sidebar">
    <div class="navbar-brand">
        <a href="#" class="logo">Petclinic iKi</a>
        <img src="/petclinic_modif/public/images/assets/PP.jpeg" alt="" width="50" height="50" style="border-radius: 100%;">
    </div>
    <button class="close-btn" onclick="toggleSidebar()"></button>
    <ul class="sidebar-links">
        <li><a href="/petclinic_modif/index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="/petclinic_modif/views/pets/read_pet_230012.php">Pet List</a></li>
        <li><a href="/petclinic_modif/views/doctors/read_doctor_230012.php">Doctor List</a></li>
        <?php if ($_SESSION['usertype'] == 'Manager') { ?>
            <li><a href="/petclinic_modif/views/users/read_user_230012.php">User List</a></li>
            <li><a href="/petclinic_modif/report/monthly_report_230012.php">Monthly Report</a></li>
        <?php } ?>
    </ul>
</div>