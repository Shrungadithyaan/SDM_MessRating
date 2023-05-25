<?php session_start();
include("../../../conn.php");

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


<header>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    .name_edit {
      font-size: 16px;
      font-family: cursive;
    }

    @media only screen and (max-width: 400px) {
      .name_edit {
        font-size: 12px;
      }
    }
  </style>
</header>
<?php

include('../../../conn.php');

$hstl_id = $_SESSION['hostel'];
$query = "SELECT * FROM food WHERE hostel_id =$hstl_id  ORDER BY food_id DESC";
$statement = $db->prepare($query);


$result = mysqli_query($db, $query);

if ($result === FALSE) {
  die(mysqli_error($db));
}

// $row = mysqli_fetch_assoc($result);




// $statement->execute();
// $result = $statement->fetchAll();
$number_of_rows = mysqli_num_rows($result);
$output = '';
$output .= '<div>
 <table class="table table-bordered table-striped" style="text-align:center;font-family:sans-serif;">
  <tr>
   <th class="hide_it name_edit" style="background-color:white;color:grey;font-family:sans-serif;">Sr. No</th>
   <th class="hide_it name_edit" style="background-color:white;color:grey;font-family:sans-serif;">Category</th>
   <th class="hide_it name_edit" style="background-color:white;color:grey;font-family:sans-serif;">Food Item</th>
<th class="hide_it name_edit" style="background-color:white;color:grey;font-family:sans-serif;">View Review</th>
   <th class="hide_it name_edit" style="background-color:white;color:grey;font-family:sans-serif;">View Comments</th>
  </tr>
';
if ($number_of_rows > 0) {
  $count = 0;
  foreach ($result as $row) {
    $count++;
    $output .= '
  <tr>
   <td class="name_edit" style="font-family:sans-serif;">' . $count . '</td>

   <td class="name_edit" style="font-family:sans-serif;">' . $row["category"] . '</td>
   <td class="name_edit" style="font-family:sans-serif;">' . $row["food_item"] . '</td>

    <td class="name_edit"><a  style="text-decoration:none"href = "chart.php?food_id=' . $row['food_id'] . ' "><button type="button" style="font-size:20px" class="btn  btn-xs"><i class="fa fa-eye" style="color:black;font-size:20px;"></i></button></a></td>
   <td class="name_edit"><a  style="text-decoration:none"href = "view_comment.php?food_id=' . $row['food_id'] . ' "><button type="button" style="font-size:20px" class="btn  btn-xs"><i class="fa fa-eye" style="color:black;font-size:20px;"></i></button></a></td>
  </tr>
  ';


    $_SESSION['foodid'] = $row['food_id'];
  }
} else {
  $output .= '
  <tr>
   <td colspan="6" align="center">No Data Found</td>
  </tr>
 ';
}
$output .= '</table>';;
echo $output;
?>
<style>
  Modal .hide_it {
    display: run-in;
  }

  @media only screen and (max-width:400px) {
    .hide_it {
      display: none;
    }
  }
</style>