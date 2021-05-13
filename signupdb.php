<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="signup2.css">
    <!-- <script src="sign.js"></script> -->
    <script>
        function validateform() {
            var x = document.f1.fname.value;
            var y = document.f1.ename.value;
            var z = document.f1.pwd.value;
            document.getElementById("try").innerHTML = "hello" + y;
            if (x === "") {
                alert("Name must be filled out");
                document.f1.fname.focus();
                return false;
            } else if (y === "") {
                alert("Email must required");
                document.f1.ename.focus();
                return false;
            } else if (z.length < 6) {
                alert("password should be greater than 6 characters !!");
                document.f1.pwd.focus();
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>

<body>

    <!-- enter sign up -->
    <?php
    $showalert = false;
    $showError = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['ename'];
        $usertype = $_POST['account'];
        $username1 = $_POST['fname'];
        $password1 = $_POST['pwd'];
        $cpassword = $_POST['cpwd'];

        $servarname = "localhost";
        $username = "root";
        $password = "";
        $database = "dhruvisign";


        $conn = mysqli_connect($servarname, $username, $password, $database);


        if (!$conn) {
            echo ("sorry we failed to connect : " . mysqli_connect_error());
        }

        // $exists = false;
        $existsql = "SELECT * FROM `signdhruvi` WHERE username = '$username1' ";
        $result = mysqli_query($conn, $existsql);

        $num = mysqli_num_rows($result);
        if ($num > 0) {
            //             echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            //   <strong> failed !</strong> username already exists .
            //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            // </div>';
            echo '<script>alert("username exists already")</script>';
        } else {
            if ($password1 == $cpassword) {
                $hash = password_hash($password1, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `signdhruvi` ( `usertype`, `email`, `username`, `password`) VALUES ('$usertype', '$email', '$username1', '$hash');";

                $result = mysqli_query($conn, $sql);
                if ($result) {
                    //                     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    //   <strong> successfully !</strong> you are sign up successfully .
                    //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    // </div>';

                    echo '<script>alert("successfully ! you are sign up successfully  ")</script>';
                    header("location: logindb.php");
                    // $showalert = true;
                }
                             
            } else {
               
                echo '<script>alert("failed  ! password do not match  ")</script>';
            }
        }




        
    }
    ?>
    <div class="testbox">
        <h1>Sign Up </h1>


        <form action="signupdb.php" name="f1" onsubmit="return validateform()" method="POST">
            <hr>
            <div class="accounttype">
                <input type="radio" value="admin" id="radioOne" name="account" checked />
                <label for="radioOne" class="radio" chec>Admin</label>
                <input type="radio" value="user" id="radioTwo" name="account" />
                <label for="radioTwo" class="radio">User</label>
            </div>
            <hr>
            <label id="icon" for="name"><i class="icon-envelope "></i></label>
            <input type="email" name="ename" id="name" placeholder="Email" />
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" maxlength="30" name="fname" id="uname" placeholder="Username" required />
            <label id="icon" for="name"><i class="icon-shield"></i></label>
            <input type="password" pattern=".{6,}" reuired title=" Enter minimum 6 characters" name="pwd" id="name" placeholder="Password" required />
            <label id="icon" for="name"><i class="icon-shield"></i></label>
            <input type="password" pattern=".{6,}" reuired title=" Enter minimum 6 characters" name="cpwd" id="name" placeholder="confirm Password" required />
            <!-- <div class="gender">
    <input type="radio" value="None" id="male" name="gender" />
    <label for="male" class="radio" chec>Male</label>
     <input type="radio" value="None" id="female" name="gender" />
    <label for="female" class="radio">Female</label><br>
     <input type="radio" value="None" id="lgbtq" class="gcenter" name="gender" checked/>
    <label for="LGBTQ" class="radio">LGBTQ</label>
   </div>  -->
            <br>
            <div class="remeber">
                <br>
                <input type="checkbox" id="rememberMe" name="remeber" value="yes">
                <label for="remembeMer">Remember Me </label><br>
                <div id="demo"></div>
            </div>
            <!-- <div class="forg">
    <a href="login.html" class="forget"> forget password </a>
   
    </div> -->
            <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
            <input type="submit" value="Sign Up" class="register" onclick="isRememberMe">
            <!-- <a href="#" class="button">Register</a> -->

        </form>

        <div class="login">
            <br>
            <p>Already have an account ? </p>
            <a href="logindb.php"> log in </a>
            <!-- <input type="submit" value="log in" class="log-in" onclick="login.html"> -->
            <!-- <p>forget password ? </p>
            <a href="login.html" class="forget"> forget password </a> -->
        </div>
    </div>
    <!-- <div id="try">

    </div> -->

</body>

</html>