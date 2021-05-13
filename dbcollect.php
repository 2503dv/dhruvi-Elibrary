<?php
$servername = "localhost";
$username1 = "root";
$password1 = "";
$database = "dhruvisign";

$conn = mysqli_connect($servername, $username1, $password1, $database);
if (!$conn) {

   die("Eroor" . mysqli_connect_error());
}
