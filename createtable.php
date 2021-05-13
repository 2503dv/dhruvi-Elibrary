<?php

$servarname = "localhost";
$username = "root";
$password = "";
$database = "dv2";


$conn = mysqli_connect($servarname, $username, $password, $database);

if (!$conn) {
    echo ("sorry we failed to connect : " . mysqli_connect_error());
} else {
    echo "connected !";
}

$sql = "CREATE TABLE `mytable3` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `age` INT NOT NULL , PRIMARY KEY (`id`)) ";
$result = mysqli_query($conn, $sql);
// $result = mysqli_query($conn,$sql);
if ($result) {
    echo "the db created !";
} else {
    echo " not created" . mysqli_error($conn);
}
?>

