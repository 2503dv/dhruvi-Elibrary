<!DOCTYPE html>
<html>

<head>

<body background="photo4.jpg"></body>

</head>

<body>
    <header>
        <section class="navsection">
            <div class="logo">
                <h1>Student list</h1>
            </div>

            <nav>
                <div class="cor">
                    <h2> <a href="#">Student</a></h2>
                </div>
                <h2> <a href="display.php">student list</a></h2>
                <h2><a href="#">HOME</a></h2>

            </nav>

            <style>
                * {
                    margin: 0;
                    padding: 0;
                }

                .navsection {
                    width: 100%;
                    height: 20vh;
                    display: flex;
                    justify-content: space-around;
                    align-items: center;
                }

                nav {
                    width: 60%;
                    display: flex;
                    justify-content: space-around;
                    align-items: right;
                    color: rgb(233, 125, 210);

                }



                .logo {
                    width: 30%;
                    color: hotpink;
                    background-image: linear-gradient(pink, powderblue);
                    padding-left: 60px;
                    box-sizing: border-box;
                }
            </style>
        </section>

        <head>

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                body {
                    font-family: Arial, Helvetica, sans-serif;
                }

                * {
                    box-sizing: border-box;
                }

                .open-button {
                    background-color: grey;
                    color: white;
                    padding: 10px 15px;
                    border: none;
                    cursor: pointer;
                    opacity: 0.8;
                    position: uperside;
                    bottom: 20px;
                    right: 20px;
                    width: 200px;
                }

                .form-popup {
                    display: none;
                    position: uperside;
                    bottom: 0;
                    right: 20px;


                }

                .form-container {
                    max-width: 500px;
                    padding: 90px;
                    background-color: rgb(135, 187, 182);
                }

                .form-container input[type=text]
                    {
                    width: 100%;
                    padding: 15px;
                    margin: 5px 0 22px 0;
                    border: none;
                    background: white;
                }

                .form-container input[type=text]:focus
                    {
                    background-color: #ddd;
                    outline: none;
                }

                .form-container .btn {
                    background-color: green;
                    color: white;
                    padding: 10px 15px;
                    border: none;
                    cursor: pointer;
                    width: 30%;
                    margin-bottom: 10px;
                    opacity: 0.8;
                }

                .form-container .cancel {
                    background-color: rgb(221, 16, 16);

                }

                .form-container .btn:hover,
                .open-button:hover {
                    opacity: 1;
                }

                .open-button {
                    position: relative;
                    background-color: #0051ff;
                }
            </style>
        </head>

        <body>



            <button class="open-button" onclick="openForm()">+New</button>

            <div class="form-popup" id="myForm" align="center">
                <form class="form-container" method="POST" action="ami.php">
                    <h1>Add New Student</h1><br>

                    <label for="Firstname"><b>firstName</b></label>
                    <input type="text" placeholder="Enter name" name="name" required><br><br>

                    <label for="lastname"><b>Lastname</b></label>
                    <input type="text" placeholder="Enter lastname" name="lastname" required><br><br>

                    <label for="course"><b>course</b></label>
                    <input type="text" placeholder="Enter your course" name="course" required><br><br>

                    <label for="MobileNo"><b>mobile_No</b></label>
                    <input type="digits" placeholder="Enter your MobileNO" name="MobileNo" required><br><br>


                    <input type="submit" class="btn " name="submit"></button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button><br>
                </form>
            </div>
            <script>
                function openForm() {
                    document.getElementById("myForm").style.display = "block";
                }

                function closeForm() {
                    document.getElementById("myForm").style.display = "none";
                }
            </script>

        </body>

</html>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';
    $firstname = $_POST["name"];
    $lastname = $_POST["lastname"];
    $course = $_POST["course"];

    $MobileNo = $_POST["MobileNo"];



    $insertquery = "INSERT INTO `student`(`first_name`, `last_name`, `cource`, `Mobile`) VALUES ('$firstname','$lastname','$course','$MobileNo') ";

    $res = mysqli_query($con, $insertquery);

    if ($res) {
        echo '
        <script>
            alert("data inserted properly")
            </script>';
    } else {
        echo
        '<script>
            alert("data not inserted")
            </script>';
    }
}
?>