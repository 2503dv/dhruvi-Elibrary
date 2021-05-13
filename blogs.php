<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: logindb.php");
    exit;
}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="contentdb.css" rel="stylesheet">
    <link href="bluetheme.css" rel="stylesheet">
    <link href="smart-forms.css" rel="stylesheet">
    <link href="icon_socialmedia.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="homes.css">


</head>

<body>
    <header id="header" class="fixed-top d-nav-flex align-items-center">
        <div class="container d-nav-flex justify-content-between">
            <div class=" side logo">
                <h1><a href="dashboard.html"><span>E</span>Library</a></h1>
            </div>
            <?php
            $x = $_SESSION['username'];

            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                $loggedin = true;
            } else {
                $loggedin = false;
            }
            echo
            '<nav id="navbar" class="navbar">
     <div class="top-nav">
        <ul>
          <li><a class="nav-link scrollto " href="backdb.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#feature">About</a></li>
          <!-- <li><a class="nav-link scrollto" href="#service">Services</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a class="nav-link scrollto " href="#team">Team</a></li> -->
          <li><a href="blog.html" class="active">Blog</a></li>
          <li class="dropdown"><a href="#"><span><i class="fa fa-user usericonnav" ></i>' . $x . '</span> <i class="fa fa-chevron-down"></i></a>

            <ul>';
            if ($loggedin) {
                echo ' <li  class="list-upper"><a href="logoutdb.php" >Log out</a></li>';
            }

            if (!$loggedin) {
                echo ' <li class="list-upper"><a href="logindb.php"><span>Log in</span></a>
               
              </li>
              <li class="list-upper"><a href="signupdb.php">Sign up</a></li>';
            }
            echo ' </ul>
          </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </div>
      </nav>';
            ?>
            <!-- .navbar -->
        </div>
    </header>
    <div class="header" style='background-image:url("background.jpg")' ;>
        <h2>Blogs of HAGWARTS</h2>
    </div>


    <div class="row">
        <div class="leftcolumn">
            <div class="card" style='background-image:url("background.jpg")' ;>
                <h2>Times of India</h2>
                <h4><b>Library cames home,</b> Dec 18, 2020</h4>
                <div><img class="fakeimg" src="c.jpeg"></div>
                <h3><U>Hagwarts opens the door</U></h3>
                <p>as soon as pandemic started in all over India since long time, all community suffers from this. It's been hard for learners, innovaters, readers to reach upto books so hagwarts comes to you to fulfiil your expectations. It's been easy for users to use this but behind this there is hardwork of well trained and operative team. Digital library is also ecofriendly.</p>
                <p>leave comment on this article:<a href="comment_box.html">comment</a></p>
            </div>
            <div class="card" style='background-image:url("background.jpg")' ;>
                <h2>TITLE HEADING</h2>
                <h5>Title description, Sep 2, 2017</h5>
                <div><img class="fakeimg" src="book2.jpeg"></div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                <p>leave comment on this article:<a href="comment_box.html">comment</a></p>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card" style='background-image:url("background.jpg")' ;>
                <h2>About Us</h2>
                <div><img class="fakeimg" src="book3.jpeg"></div>
                <p>Hagwarts Digital Library <B><U>(HDL)</U></B> is a virtual repository of learning resources which is not just a repository with search/browse facilities but provides a host of services for the learner community. Filtered and federated searching is employed to facilitate focused searching so that learners can find the right resource with least effort and in minimum time. it provides academic content of well known writers.It is designed to enable people to learn and prepare from best practices from all over the world and to facilitate researchers to perform inter-linked exploration from multiple sources. </p>
            </div>
            <div class="card" style='background-image:url("background.jpg")' ;>
                <h3>Popular Post</h3>
                <div><img class="fakeimg" src="book4.jpeg"></div>


            </div>

        </div>
    </div>
    <div class="footer" style='background-image:url("background.jpg")' ;>
        <h3>
            <center>Follow us on</center>
        </h3>

        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-google"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-skype"></i></a>

    </div>

</body>

</html>