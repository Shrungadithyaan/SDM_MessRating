<?php
session_start();
include('../conn.php');
// $hstl_id = 1;
// $query = "SELECT * FROM users WHERE hostel_id =$hstl_id  ";
// $statement = $db->prepare($query);
// $statement->execute();
// $result = $statement->fetchAll();
// $number_of_rows = $statement->rowCount();
$sql = "select * from  cook  where hostel_id='{$_SESSION['hostel_id']}'";
$result = $db->query($sql);

$output = '';
$output .= '
 <table class="table table-bordered table-striped">
 <thead > 
 <tr>
   <th>Sr. No</th>
   <th>Cook Id</th>
   <th>Cook name</th>
  
   <th style="color:white">Delete</th>
  </tr>
  </thead>
';
if ($result->num_rows > 0) {
  $count = 0;
  foreach ($result as $row) {
    $count++;
    $name = $row['cook_id'];
    $output .= '
  <tr>
   <td>' . $count . '</td>

   <td>' . $row["cook_id"] . '</td>
   <td>' . $row["cook_name"] . '</td>
  
   <td><a href="fetch_cook.php?name=' . $name . '"><button type="button" class="btn btn-danger btn-xs delete" id="' . $row["cook_id"] . '">Delete</button></a></td>
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





if (isset($_GET['name'])) {
  $name = $_GET['name'];
  $query = "DELETE FROM cook WHERE cook_id=$name";
  $result = $db->query($query);
  if ($result === TRUE) {
?>
    <script>
      alert("User Data deleted successfully.");
      window.location.href = "cook.php";
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("can't able to delete.");
      window.location.href = "cook.php";
    </script>
  <?php
    // echo $db->error;
  }
}

if (isset($_POST['name'])) {
  $user = $_POST['name'];
  // $password = $_POST['pass'];
  $sql = "INSERT INTO cook(cook_name,hostel_id) VALUES('$user','{$_SESSION['hostel_id']}')";
  $result = $db->query($sql);

  if ($result === TRUE) {
  ?>
    <script>
      alert("User Data added successfully.");
      window.location.href = "cook.php";
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("could not delete, the food items cooked by the cook is still being rated.");
      // window.location.href = "cook.php";
    </script>
<?php
    echo $db->error;
  }
}


?>