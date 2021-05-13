<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbcollect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $usertype = $_POST["account"];

    // $sql = "Select * from users where username='$username' AND password='$password'";
    // $sql = "Select * from signdhruvi where username='$username'";
    $sql = "SELECT * FROM `signdhruvi` WHERE `usertype` LIKE '$usertype' AND `username` LIKE '$username' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: backdb.php");
            } else {
                $showError = "Invalid Credentials";
            }
        }
    } else {
        $showError = "Invalid Credentials";
    }
}

?>

<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="logindb.css">
    <script src="sign.js"></script>
</head>

<body>
    <?php
    if ($login) {

        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>successfully !</strong> you are logged in .
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($showError) {

        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error !</strong>' . $showError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <div class="testbox">
        <div class="con">
            <h1>Log In</h1>

            <form action="/dhruvi/logindb.php" name="f1" onsubmit="return validateform()" method="post">
                <hr>
                <div class="accounttype">
                    <input type="radio" value="admin" id="radioOne" name="account" checked />
                    <label for="radioOne" class="radio" chec>Admin</label>
                    <input type="radio" value="user" id="radioTwo" name="account" />
                    <label for="radioTwo" class="radio">User</label>
                </div>
                <hr>

                <label id="icon" for="name"><i class="icon-user"></i></label>
                <input type="text" name="username" id="uname" placeholder="Username" />
                <label id="icon" for="name"><i class="icon-shield"></i></label>
                <input type="password" name="password" id="name" placeholder="Password" />

                <input type="submit" value="log in" class="register" onclick="isRememberMe">

            </form>
            <br>
            <div class="log">
                <p>Don't have an account ? </p>
                <a href="signupdb.php"> sign up </a>
            </div>
        </div>
    </div>
    <div id="try">

    </div>
</body>

</html>