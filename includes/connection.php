<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
if (!isset($_SESSION['total'])) {
    $_SESSION['total'] = 0;
}

//make database connection
$conn = mysqli_connect("localhost", "root", "", "project_4");
if (!$conn) {
    die("cannot connect to server");
}
