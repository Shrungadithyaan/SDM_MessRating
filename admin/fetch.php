<?php
session_start();
include('../conn.php');
// $hstl_id = 1;
// $query = "SELECT * FROM users WHERE hostel_id =$hstl_id  ";
// $statement = $db->prepare($query);
// $statement->execute();
// $result = $statement->fetchAll();
// $number_of_rows = $statement->rowCount();
$sql = "select * from  users  where hostel_id='{$_SESSION['hostel_id']}' and role='Student'";
$result = $db->query($sql);

$output = '';
$output .= '
 <table class="table table-bordered table-striped">
 <thead > 
 <tr>
   <th>Sr. No</th>
   <th>User Id</th>
   <th>Password</th>
  
   <th style="color:white;">Delete</th>
  </tr>
  </thead>
';
if ($result->num_rows > 0) {
  $count = 0;
  foreach ($result as $row) {
    $count++;
    $name=$row['name'];
    $output .= '
  <tr>
   <td>' . $count . '</td>

   <td>' . $row["name"] . '</td>
   <td>' . $row["password"] . '</td>
  
   <td><a href="delete.php?name='.$name.'"><button type="button" class="btn btn-danger btn-xs delete" id="' . $row["name"] . '">Delete</button></a></td>
  </tr>
  ';
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
