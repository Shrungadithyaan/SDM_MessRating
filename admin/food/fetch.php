<?php
session_start();
if (!isset($_SESSION['user_id'])) {
?>
  <script>
    window.location.href = "../../index.php";
  </script>
<?php
}

?>
<header>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    .name_edit {
      font-size: 18px;
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

include('../../conn.php');
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
$output .= '
 <table class="table table-bordered table-striped">
  <tr>
   <th class="name_edit" style="font-family:sans-serif;">Sr. No</th>
   <th class="name_edit" style="font-family:sans-serif;">Category</th>
   <th class="name_edit" style="font-family:sans-serif;">Food_item</th>
  
   <th class="name_edit" style="font-family:sans-serif;">Delete</th>
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
  
   <td class="name_edit"><button type="button" style="font-size:20px" class="btn  btn-xs delete" id="' . $row["food_id"] . '"><i class="material-icons" style="color:red;font-size:20px;">delete</li></button></td>
   </tr>';
  }
} else {
  $output .= '
  <tr>
   <td colspan="6" align="center">No Data Found</td>
  </tr>
 ';
}
$output .= '</table>';
echo $output;
