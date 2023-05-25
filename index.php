<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>MessRating</title>
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link rel="icon" href="./images/sdm_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="./css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    footer {
      position: absolute;

      bottom: 0;

      left: 0;

      right: 0;

      background: #111;

      height: 10px;

      width: 100vw;

      padding-top: 40px;

      color: #fff;
    }

    #container{
      border-radius: 20px;
      
    }
    .submit{
      background-color: blue;
    }

    @media (max-width: 500px) {
      .footer-bottom p {
        float: none;
      
      }

      .footer-menu ul {
        display: flex;

        margin-top: 10px;

        margin-bottom: 20px;

        text-align: center;
      }
    }
    @media screen and (max-width: 480px) {
        #container{
        width: 330px;
      }
    }
    ::placeholder{
      color:black;
      font-weight:bold;
    }
  </style>
</head>

<body style="font-family: Times new roman;">
  <!-- partial:index.partial.html -->

  <div id="login-button">
    <img src="./images/sdm_logo.png">

    </img>
    <!-- <br> -->
    <center>
      <h5 style="color:white;margin-top:-8px">Click here To</h5>
    </center>
    <center>
      <h5 style="color:white;margin-top:-20px">Get Started</h5>
    </center>
  </div>
  <div id="container" style="background-color:white;box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;" class="login">
    <h1 style="margin-top:80px;color:black;">Log In</h1>
    <div style="text-align: center;">
      <span class="errormsg">
        <?php
        if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
          session_destroy();
          unset($_SESSION['error']);
        }
        ?>
      </span>
    </div>
    <span class="close-btn">
      <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
    </span>

    <form action="login_check.php" method="POST">
      <input type="number" placeholder="Username" pattern="[0-9]{6}" maxlength="6" name="username" style="color:black;"required autocomplete="off" autofocus>
      <br />
      <input type="password" placeholder="Password" name="password" style="color:black;" required>
      <br />
      <button class="form-control btn btn-primary submit px-3" name="save">Sign In</button>

    </form>
  </div>
  <footer>



    <div class="footer-bottom">

      <center>
        <p style="margin-top:-25px;font-family:roboto;">&copy 2023 - Designed & Developed by B.Voc[S&AD],<br> All Rights Reserved </p>
      </center>
    </div>

  </footer>
  <!-- Forgotten Password Container -->

  <!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
  </script>
  <script src="./js/script.js"></script>
  <script>
    const year = document.getElementById("year");

    year.textContent = new Date().getFullYear();
  </script>

</body>

</html>