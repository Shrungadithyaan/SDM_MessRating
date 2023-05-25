<?php
session_start();
include "../conn.php";
?>
<?php


if (!isset($_SESSION['user_id'])) {
?>
  <script>
    window.location.href = "../index.php";
  </script>
<?php
}

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />


  <title>MessRating</title>
  <link rel="icon" href="../images/sdm_logo.png" type="image/x-icon">

  <!-- bootstrap core css -->
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> -->

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="../management/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="../management/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="css/templatemo-style.css"> -->
  <link rel="stylesheet" href="../management/css/templatemo-style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    .navbar-default .navbar-brand {
      /* color: #212227; */
      color: #eb5424;
      font-weight: bold;
      font-size: 30px;
      line-height: 45px;
      padding: 10px 0 0 12px;
    }

    body {
      /* background: #262a2b; */
      background: white;
      /* font-family:"Times New Roman" */


    }

    .name {
      color: #eb5424;
      font-size: 25px;
      font-weight: bold;
      margin-left: 15px;
    }
  </style>
</head>

<body>


  <div class="navbar navbar-default bs-dos-nav navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>

        <img src="../management/sdm_logo.png" class="fa fa-bars" style="height: 90px; width: 90px;" />
        <a href="#" class="name" style="text-decoration:none">RateMyFood</a>
        <!-- <a href="./home.php" class="navbar-brand">Ideal Bits</a> -->


      </div>

      <nav class="collapse navbar-collapse" id="rock-navigation">
        <ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
          <li><a href="#" class="smoothScroll" style="color: #eb5424;">Home</a></li>
          <li><a href="food/index.php" class="smoothScroll">Add Food</a></li>
          <!-- <li><a href="index.php" class="smoothScroll">ADD MENU</a></li> -->
          <li><a href="View_menu.php" class="smoothScroll">View Menu</a></li>
          <li><a href="User1.php" class="smoothScroll">Users</a></li>
          <li><a href="cook.php" class="smoothScroll">Cooks</a></li>
          <li><a href="../logout_a.php" class="smoothScroll">Logout</a></li>



      </nav>

    </div>
  </div>
  <br><br>


  <div class="hero_area">
    <div class="bg-box">
      <img src="../images/college.jpg" alt="">
    </div>

    <!-- <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Rate My Food
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto" style="padding-left: 500px;">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#menu">Add Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="User1.php">User</a>
              </li>
              
              
            </ul>
            
          </div>
        </nav>
      </div>
    </header> -->

    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <!-- <div class="detail-box">
                    <h1>
                     SDM Hostel Ujire
                    </h1><br>
                    <p style="font-size: 15px;"><i>
                      “One of the very nicest things about life is the way we must regularly stop whatever it is we are doing and devote our attention to eating.”
                    </i></p>
                    
                  </div> -->
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div> -->
      </div>

    </section>

  </div>

  <!-- offer section -->

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
        <div class="row" id="menu">
          <div class="col-md-6  ">
            <div class="box" style="background-color:white;box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
              <div class="img-box">
                <img src="images/breakfast.jpg" alt="" style="height: 95%;">
              </div>
              <div class="detail-box">
                <h5>
                  <!-- Tasty Thursdays -->
                </h5>
                <h6>
                  <span style="color:black;font-family:Raleway, sans-serif;">Breakfast</span>
                </h6>
                <a href="menu_list.php?menu=Breakfast" style="text-decoration:none;">
                  Add Now
                  <g>
                    <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                  </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>

                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6  ">
            <div class="box " style="background-color:white;box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
              <div class="img-box">
                <img src="images/lunch.jfif" alt="" style="height: 100%;">
              </div>
              <div class="detail-box">
                <h5>
                  <!-- Pizza Days -->
                </h5>
                <h6>
                  <span style="color:black;font-family:Raleway, sans-serif;">Lunch</span>
                </h6>
                <a href="menu_list.php?menu=Lunch" style="text-decoration:none;">
                  Add Now
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>









        <div class="row">
          <div class="col-md-6  ">
            <div class="box " style="background-color:white;box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
              <div class="img-box">
                <img src="images/dinner.jpg" alt="" style="height: 100%;">
              </div>
              <div class="detail-box">
                <h5>
                  <!-- Tasty Thursdays -->
                </h5>
                <h6>
                  <span style="color:black;font-family:Raleway, sans-serif;">Dinner</span>
                </h6>
                <a href="menu_list.php?menu=Dinner" style="text-decoration:none;">
                  Add Now
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>

                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6  ">
            <div class="box " style="background-color:white;box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
              <div class="img-box">
                <img src="images/snacks.jfif" alt="" style="height: 95%;">
              </div>
              <div class="detail-box">
                <h5>
                  <!-- Pizza Days -->
                </h5>
                <h6>
                  <span style="color:black;font-family:Raleway, sans-serif;">Snacks</span>
                </h6>
                <a href="menu_list.php?menu=Snack" style="text-decoration:none;">
                  Add Now
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>

                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <script src="../management/js/jquery.js"></script>
  <script src="../management/js/bootstrap.min.js"></script>
  <script src="../management/js/smoothscroll.js"></script>
  <script src="../management/js/jquery.nav.js"></script>
  <script src="../management/js/isotope.js"></script>
  <script src="../management/js/imagesloaded.min.js"></script>
  <script src="../management/js/custom.js"></script>
</body>

</html>