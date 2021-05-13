<?php
$servarname = "localhost";
$username = "root";
$password = "";
$database = "dv2";


$conn = mysqli_connect($servarname, $username, $password, $database);

$name = "dgt";
$age ="20";

if (!$conn) {
    echo ("sorry we failed to connect : " . mysqli_connect_error());
} else {
    echo "connected !";
}
$sql = "INSERT INTO `mytable3` (`id`, `name`, `age`) VALUES ('1', '$name', '$age')";


$result = mysqli_query($conn, $sql);
// $result = mysqli_query($conn,$sql);
if ($result) {
    echo "the db created !";
} else {
    echo " not created" . mysqli_error($conn);
}
?>