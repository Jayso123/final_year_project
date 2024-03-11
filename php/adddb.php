<?php

$server = "localhost";
$title = "";
$Description = "";
$Eligibility = "";
$Deadline = "";
$database = "scholarship";

$conn = mysqli_connect($server, $title, $Description, $Eligibility, $Deadline, $database);

if ($conn) {
    // echo "sucess";
} else {
    die("Error" . mysqli_connect_error());
}

?>