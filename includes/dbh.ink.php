<?php

$serverName = "localhost";
$dBUsername = "Mason";
$dBPassword = "Bobnodbobnod1";
$dBName = "Users";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Unable To Connect: " . mysqli_connect_error());
    header("location: ../index.php?stmt");
    exit();
}