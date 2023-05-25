<?php
session_start();

if (!isset($_SESSION['id'])) {
?>
  <script>
    window.location.href = "../index.php";
  </script>
<?php
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MessRating</title>
  <link rel="icon" href="../images/sdm_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="../css/u_home.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: Raleway, sans-serif;
    }

    .button-33 {
      background-color: white;
      border-radius: 10px;
      box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
      color: green;
      cursor: pointer;
      display: inline-block;
      /* font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif; */
      font-family: Raleway, sans-serif;
      /* padding: 7px 20px; */
      text-align: center;
      /* text-decoration: none; */
      transition: all 250ms;
      border: 0;
      font-size: 16px;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      display: block;
      margin: 20px;
      width: 30%;
      height: 30%;
      font-weight: bold;
      /* font-family: cursive; */
    }

    .button-33:hover {
      box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
      transform: scale(1.05) rotate(-1deg);
    }

    .logo {
      height: 120px;
      width: 120px;
    }

    @media screen and (max-width:480px) {
      .button-33 {
        width: 60%;
        height: 5%;
        font-size: 12px;
      }

      .logo {
        height: 60px;
        width: 60px;
      }

      .heading {
        font-size: 22px;
      }
    }
  </style>
</head>

<body>

  <?php
  include "../conn.php";
  // $sql = "select * from  food  where hostel_id='.$_SESSION[hostel_id].' and category='$category' and status='1'";

  // echo $day;
  $sql = "SELECT * FROM hostel where hostel_id='{$_SESSION['hostel_id']}'";
  // echo $sql;

  $result = $db->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    // $foodid = array();
    // $ratings = array();

    while ($row = $result->fetch_assoc()) {
      $hostel_name = $row['hostel_name'];
      $_SESSION['hostel_n']=$hostel_name;
    }
  ?>


  <?php
  } else {
    // echo "0 results";echo $cal;
    // header('Location:../notfound.php');
  ?>
    <script>
      // alert("No data found");
      // window.location.href = "home.php";
    </script>
    <?php
    ?>

    <!-- window.location.notfound.php; -->
  <?php
  }

  ?>


  <div class="centerer">

    <img src="../images/sdm_logo.png" class="fa fa-bars logo" style="" />
    <h1 style="color:orange;font-family:Raleway, sans-serif;" class="heading"><b>Rate my food</b></h1>
    </br>
    <center>
      <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Hostel Name : <?php echo $hostel_name ?></h2>
    </center>
    <div align="center">

      <a class="button-33" href="student_menu.php?value=Breakfast">Breakfast</a>
      <a class="button-33" href="student_menu.php?value=Lunch">Lunch</a>
      <a class="button-33" href="student_menu.php?value=Snack">Snacks</a>
      <a class="button-33" href="student_menu.php?value=Dinner">Dinner</a>

      <a href="../logout.php" style="font-size:25px;font-family:Raleway, sans-serif;font-weight:bold;"><i class="fas fa-sign-out-alt" style="font-size:20px;color:red;">logout</i></a>
    </div>

  </div>

  <script>
    $(function() {
      $('.btn-6')
        .on('mouseenter', function(e) {
          var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
          $(this).find('span').css({
            top: relY,
            left: relX
          })
        })
        .on('mouseout', function(e) {
          var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
          $(this).find('span').css({
            top: relY,
            left: relX
          })
        });
    });
  </script>
</body>

</html>