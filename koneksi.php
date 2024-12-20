<?php
$db_host = "localhost";
$db_username = 'root';
$db_password = "";
$db_name = "petclinic";

$db_con = mysqli_connect($db_host, $db_username, $db_password) or die;

$db_select = mysqli_select_db($db_con, $db_name);
