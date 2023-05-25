<?php
session_start();
include('../conn.php');

// $sql = "select * from  menu  where hostel_id='{$_SESSION['hostel_id']}'";
// $sql = "SELECT m.*,c.cook_name FROM menu m JOIN cook c ON m.cook_id = c.cook_id ";
$sql = "SELECT menu.*,cook.cook_name FROM menu LEFT JOIN cook ON menu.cook_id = cook.cook_id where menu.hostel_id={$_SESSION['hostel_id']}";
// $sql = "SELECT * FROM menu";
$result = $db->query($sql);

$output = '';
$output .= '
 <table class="table table-bordered table-striped">
 <thead > 
 <tr>
   <th>Food</th>
   <th>Category</th>
   <th>Day</th>
    <th>Cook</th> 
   <th>Delete</th>
  </tr>
  </thead>
';
if ($result->num_rows > 0) {
  $count = 0;
  foreach ($result as $row) {
    $count++;
    $foodid=$row['food_id'];
    $date = $row['Created_time'];
    $output .= '
  <tr>
   <td>' . $row["item"] . '</td>

   <td>' . $row["category"] . '</td>
   <td>' . $row["day"] . '</td>
   <td>' . $row["cook_name"] . '</td>
   <td><a href="delete_menu.php?id='.$foodid.'&date='.$date.'"><button type="button" class="btn btn-danger btn-xs delete" id="' . $row["food_id"] . '">Delete</button></a></td>
  </tr>
  ';
  }
} else {
  $output .= '
  <tr>
   <td colspan="4" align="center">No Data Found</td>
  </tr>
 ';
}
$output .= '</table>';
echo $output;
