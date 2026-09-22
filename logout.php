<?php
session_start();
unset($_SESSION['admin_role']);
header('location:admin_login.php');
?>
