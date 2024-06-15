<?php
$conn = mysqli_connect("localhost", "root", "", "dx_coding");

if (!$conn) {
    die("Failed: " . mysqli_connect_error());
}
?>