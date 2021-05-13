<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: logindb.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Hogwarts Library</title>
  <link rel="stylesheet" href="background-cssdb2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="homedb.css">
  <link rel="stylesheet" href="dashboarddb.css">
  <link rel="stylesheet" href="contactdb.css">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="footers.css">
  <link rel="stylesheet" type="text/css" href="search.css">
  <script src="search.js"></script>
</head>

<body>
  <div class="bcontainer" id="blur">
    <div class="content">
      <section id="head-all">

        <section id="banner" class="section"></section>

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
          <li><a class="nav-link scrollto active" href="#head-all">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <!-- <li><a class="nav-link scrollto" href="#service">Services</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
          <li><a href="blogs.php">Blog</a></li>
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
        <div class="banner-txt" id="home">
          <h1> The Hogwarts Library </h1>
          <p> " Nothing is pleasanter than exploring a <b> library </b>" </p>
          <a href="signupdb.php" class="btn-banner"> Get started </a>

        </div>

      </section>
      <!-- </header> -->
      <div class="side-nav-container">
        <div class="sidenav">
          <div>
            <h2 class="reports"> Reports </h2>
            <a href="#dashboard" class="dash"><i class="side-bg  fa fa-twitter "> Dashboard </i></a>
          </div>
          <h2 class=" man"> manage </h2>




          <button class="dropdown-btn"><i class="fa fa-exchange icon-pad"></i> Transaction
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="borrow.php">Borrow Books</a>
            <a href="return.php">Return Books</a>
            <!-- <a href="#">Link 3</a> -->
          </div>
          <button class="dropdown-btn"><i class="fa fa-book icon-pad"></i>Books
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="engineering.html">Engineering Books</a>
            <a href="harry.html">Fiction Books</a>
            <a href="mystrey.html">mystery & thriller books</a>
          </div>
          <button class="dropdown-btn"><i class="fa fa-users icon-pad"></i>Students
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-container">
            <a href="student.php">student</a>
            <!-- <a href="#">Link 2</a> -->
            <!-- <a href="#">Link 3</a> -->
          </div>
          <div class="last-side">
            <!-- <a href="#services"><i class="fa fa-offer icon-pad"></i>Services</a> -->
            <a href="#contact"><i class="fa fa-phone icon-pad"></i>Contact</a>
            <a href="#contact" onclick="toggle5()"><i class="fa fa-search icon-pad"></i>Search</a>
          </div>
          <div class="social-links mt-3 text-center side-icon f-icon">
            <a href="#"><i class="icon-center fa fa-twitter "></i></a>
            <a href="#"><i class="icon-center fa fa-facebook "></i></a>
            <a href="#"><i class="icon-center fa fa-instagram  "></i></a>
            <!-- <a href="#" ><i class="icon-center fa fa-skype"></i></a> -->
            <a href="#"><i class="icon-center fa fa-linkedin "></i></a>
          </div>
        </div>
      </div>
      <div class="dash-main" id="dash-mains">
        <div class="wholedashboard">
          <section id="dashboard">
            <div class="dashboard-container">
              <div class="dash-heading">
                <h1>Dashboard</h1>
              </div>
              <div class="dashboard-grid">
                <div class="ser-deltails blue">
                  <div class="item">

                    <a class="services-icon" href="#">
                      <h2 class="dash-no">5</h2> <i class="fa fa-book dash-icon"></i>
                    </a>

                    <h4 class="dash-txt">Total Books</h4>
                    <div class="total-books more-blue">
                      <a href="#" onclick="toggle4()"> More info <i class="fa fa-briefcase"></i></a>
                    </div>
                  </div>
                </div>
                <div class="ser-deltails green">
                  <div class="item">
                    <a class="services-icon" href="#">
                      <h2 class="dash-no">2</h2> <i class="fa fa-graduation-cap dash-icon"></i>
                    </a>

                    <h4 class="dash-txt">Total Students</h4>
                    <div class="total-students more-green">
                      <a href="#" onclick="toggle3()"> More info <i class="fa fa-briefcase"></i></a>
                    </div>
                  </div>
                </div>
                <div class="ser-deltails orange">
                  <div class="item">
                    <a class="services-icon" href="#">
                      <h2 class="dash-no">0</h2> <i class="fa fa-handshake-o dash-icon"></i>
                    </a>

                    <h4 class="dash-txt">Return Today</h4>
                    <div class="total-return more-orange">
                      <a href="#" onclick="toggle2()"> More info <i class="fa fa-briefcase "></i></a>
                    </div>
                  </div>
                </div>
                <div class="ser-deltails red">
                  <div class="item">
                    <a class="services-icon" href="#">
                      <h2 class="dash-no">1</h2> <i class="fa fa-address-card  dash-icon"></i>
                    </a>

                    <h4 class="dash-txt">Borrowed Today</h4>
                    <div class="total-borrow more-red">
                      <a href="#" onclick="toggle()"> More info <i class="fa fa-briefcase"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="dash-transaction" id="chartType">
            <div class="dashtrans-con">
              <div class="trans-header">
                <h2 class="trans-head">Monthly Transaction Report </h2>
                <label for="years" class="years">Select Years : </label>

                <select name="years" onchange="year()">
                  <option value="years" class="years-value">years</option>
                  <option value="2019" class="years-value">2019</option>
                  <option value="2020" class="years-value">2020</option>
                  <option value="2021" class="years-value">2021</option>
                </select>

              </div>
              <a href="graphdb.html"><img src="trans.png" alt="report" class="report-img"></a>
            </div>
          </section>

        </div>

      </div>


      <div class="" id="about">
        <div class="about_con">

          <h2 class="about-heading"> About us </h2>




          <div class="about-grid">
            <div class="about-item">




              <h3 class="about-head"><span>About the Hogwarts Library</span></h3>

              <p>When the University of Melbourne was established in 1853 the role of University Librarian was held by Mr John Frederic James, who also served as Registrar and University Secretary.</p>


              </a>
            </div>
            <div class="about-item">



              <h3 class="about-head"><span>Strategy, planning and quality</span></h3>

              <p>Information is a strategic asset for the University of Melbourne. It lies at the heart of scholarly communication, learning and teaching, research, organisational governance, work practices, effective use of resources, and accountability.</p>


              </a>
            </div>
            <div class="about-item">



              <h3 class="about-head"><span>Organisational structure</span></h3>

              <p>The University Library comprises the two directorates of Scholarly Information and Research and Collections, operating within Academic Services as part of University Services. Strategic leadership is provided by the Director, Scholarly Services (University Librarian).</p>


              </a>
            </div>
            <div class="about-item">


              <!--%assetid%-->
              <h3 class="about-head"><span>Employment and Professional Practice Programs</span></h3>

              <p>Employment and Professional Practice Programs at the University of Melbourne Library</p>


              </a>
            </div>
          </div>








        </div>
      </div>





      <section id="contact">
        <div class="cont-con-con">
          <div class="contact">
            <div class="section-headline text-center">
              <div class="contact-line">
                <h2>Contact us</h2>
              </div>

            </div>
            <div class="data">
              <div class="call">
                <div class="single-icon">
                  <i class="fa fa-phone"></i>
                  <p>
                    Call: +91 7990077443<br>
                    <span>Monday-Friday (9am-5pm)</span>
                  </p>
                </div>
              </div>
              <!-- </div> -->
              <div class="email">
                <div class="single-icon">
                  <i class="fa fa-envelope"></i>
                  <p>
                    Email: dhruvi2403dv@gmail.com<br>
                    <span>Web: www.elibrary.com</span>
                  </p>
                </div>
              </div>
              <div class="contact-location">
                <div class="single-icon">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <p>
                    Location: Mota bazaar, vvn<br>
                    <span>Anand 388120, INDIA</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="con-con">
              <div class="map">
                <div class="col-md-6">
                  <!-- Start Map -->
                  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                  <!-- <iframe src="https://goo.gl/maps/u8sTQGqfuDmXdGeT7" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.710536733023!2d72.9216363147916!3d22.552513585193193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e74c03b7749%3A0xab364c66fd4834c!2sBirla%20Vishvakarma%20Mahavidyalaya%20(BVM)!5e0!3m2!1sen!2sin!4v1619534696309!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  <!-- End Map -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="query-form">
                  <div class="form contact-form">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                      </div>
                      <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                      </div>
                      <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                      </div>
                      <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                      <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="last-read">
        <!-- <a href="#" onclick="toggle()"> Read more</a> -->
      </div>

    </div>
  </div>
  <div id="popup">
    <h2> Borrow Books</h2>
    <p>Borrow eBooks and eAudiobooks free from our library using our BorrowBox . Say hello to your future library, wherever you are, whenever you are free. NEED HELP? For help and support you can reach our team via supportelibrary@gmail.com</p>
    <!-- <a href="#" onclick="toggle()"> close </a> -->
    <div class="info-a">
      <!-- <a href="backdb.php"> close </a> -->
      <a href="#" onclick="toggle()" style="color: black; cursor:pointer;"> close </a>
    </div>

    <!-- <div class="info-link">
      <a href="backdb.php"> close </a>
    </div> -->

  </div>
  <div id="popup2">
    <h2>Return Books </h2>
    <p>All digital titles are automatically returned on their due dates, so you never have to worry about late fees. If you'd like to return a title early to make space in your library account, use one of the sections below. Return from the app or software you used to download it. You can return titles using the app or software you used to download them.</p>
    <a href="#" onclick="toggle2()"> close </a>
  </div>
  <div id="popup3">
    <h2>Total Students </h2>
    <p>For more information please see Campuses. U of T has 15,585 new full-time students entering our First Entry* Undergraduate Programs in Fall 2019-20: * First Entry programs include Arts & Science, Applied Science & Engineering, Architecture, Kinesiology & Physical Education, Music and Transitional Year Program.</p>
    <a href="#" onclick="toggle3()"> close </a>
  </div>
  <div id="popup4">
    <h2>Total Books </h2>
    <p>There are printed, traditional books (monographs, as we call them) and there are bound journals (magazines, etc.) And of course, there are electronic books that we purchase more and more, and tens of thousands of electronic journals. And microfilm! Millions of reels of microfilm, which include books, newspapers, journals, and more.

      And none of this includes special collection and archival materials, which would include photographs, diaries, letters, and other materials which are generally measured in linear feet.

      Roughly speaking, considering all of the above, the UA Libraries have about 3.5 million volumes, and about 34,000 linear feet of manuscript and archival materials.</p>
    <a href="#" onclick="toggle4()"> close </a>
  </div>

  <div id="popup5">
    <h2>search available books.</h2>
    <input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Search animals..">
    <ul class="searchlink-grid">
      <li> <a href="http://www.google.com" class="searchlink1"> google </a> </li>
      <li> <a href="https://www.pdfdrive.com/" class="searchlink1"> pdf drive </a> </li>
    </ul>
    <!-- ordered list -->
    <ol id='list'>
      <li class="animals"><a href="engineering.html" class="booklinks1"> Engineering Books </a></li>
      <li class="animals"><a href="harry.html" class="booklinks1"> harry potter Books </a></li>
      <li class="animals"><a href="mystrey.html" class="booklinks1"> mystrey and thriller Books </a></li>
      <li class="animals"><a href="https://www.readanybook.com/online/765596#582910" class="booklinks1"> The shadow </a></li>
      <li class="animals"><a href="https://www.readanybook.com/online/566000#383279" class="booklinks1"> Predator's Gold </a></li>
      <li class="animals"><a href="https://www.readanybook.com/online/565681#357420" class="booklinks1"> Battlefield Earth: a Saga of the Year 3000 </a></li>
      <li class="animals"><a href="https://www.readanybook.com/online/565661#357400" class="booklinks1"> The Secret Keeper </a></li>
      <li class="animals"><a href="https://www.readanybook.com/online/565922#383142" class="booklinks1"> Thirteen (13) Reasons Why </a></li>

    </ol>
    <a href="#" onclick="toggle5()"> close </a>
  </div>
  <div class="footers">
    <div class="footer">
      <div>
        <p class="pi">
          &copy; Copyright <strong>elibrary</strong>. All Rights Reserved
        </p>
      </div>
    </div>
    <script type="text/javascript">
      function toggle() {
        var blur = document.getElementById('blur');
        blur.classList.toggle('pactive');
        var popup = document.getElementById('popup');
        popup.classList.toggle('pactive');
      }

      function toggle2() {
        var blur = document.getElementById('blur');
        blur.classList.toggle('pactive');
        var popup2 = document.getElementById('popup2');
        popup2.classList.toggle('pactive');
      }

      function toggle3() {
        var blur = document.getElementById('blur');
        blur.classList.toggle('pactive');
        var popup3 = document.getElementById('popup3');
        popup3.classList.toggle('pactive');
      }

      function toggle4() {
        var blur = document.getElementById('blur');
        blur.classList.toggle('pactive');
        var popup4 = document.getElementById('popup4');
        popup4.classList.toggle('pactive');
      }

      function toggle5() {
        var blur = document.getElementById('blur');
        blur.classList.toggle('pactive');
        var popup5 = document.getElementById('popup5');
        popup5.classList.toggle('pactive');
      }
      // function toggle4() {
      //   var blur = document.getElementById('blur');
      //   blur.classList.toggle('pactive');
      //   var popup4 = document.getElementById('popup4');
      //   popup4.classList.toggle('pactive');
      // }
    </script>

    <script>
      var dropdown = document.getElementsByClassName("dropdown-btn");
      var i;

      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
          } else {
            dropdownContent.style.display = "block";
          }
        });
      }
    </script>
</body>

</html>