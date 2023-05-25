<?php
session_start();
include '../conn.php';
$food = "";
$checkbox1 = $_POST['check'];
$category = $_POST['category'];
// $food = $_POST['food'];
$day = $_POST['day'];
$cook = $_POST['cook'];
$chk = "";
$i = 0;
foreach ($checkbox1 as $row => $chk) {
  $sql = "SELECT food_item FROM food WHERE food_id = $chk";
  $result = $db->query($sql);
  $row = $result->fetch_assoc();
  $food = $row['food_item'];

  $date = date('Y-m-d');
  $query = "SELECT * FROM menu WHERE CAST(Created_time as DATE)='$date' and food_id='$chk' and hostel_id='{$_SESSION['hostel_id']}'";
  $ans = $db->query($query);
  if ($ans->num_rows == 0) {

    $sql1 = "INSERT INTO menu(food_id,item,hostel_id,category,day,cook_id) VALUES($chk,'$food','{$_SESSION['hostel_id']}','$category','$day',$cook)";
    $result1 = $db->query($sql1);
    $i++;
  } else {
?>
    <script>
      alert("Data already Inserted ");
      window.location.href = "index.php";
    </script>
  <?php

  }
}

if ($result) {
  ?>
  <script>
    alert("Data Inserted Successfully");
    window.location.href = "index.php";
  </script>
<?php

} else {
?>
  <script>
    alert("Failed to insert data");
    //   window.location.href="index.php";
  </script>
<?php
  // echo $result->error;
}


?>