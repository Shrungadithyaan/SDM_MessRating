  <?php session_start();

  // include '../../home.php';
  include "../../../conn.php";

  $hstl = $_SESSION['hostel'];
  ?>
  <?php


  if (!isset($_SESSION['id'])) {
  ?>
    <script>
      window.location.href = "../../../index.php";
    </script>
  <?php
  }

  ?>

  <?php
  //including the database connection file
  include_once("../../../conn.php");
  $userid = $_POST['manage_name'];
  $password = $_POST['manage_pass'];
  $sql = "INSERT INTO users(`name`,hostel_id,`role`,`password`) VALUES($userid,13,'Main_management','$password')";
  $result = $db->query($sql);

  if ($result === TRUE) {
  ?>
    <script>
      alert("Main management Data added successfully.");
      window.location.href = "index.php";
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("Could not add the Management member");
      window.location.href = "index.php";
    </script>
  <?php
  }
  //display success message

  echo "<br/><a href='index.php'>View Result</a>";
  //     }
  // }
  ?>