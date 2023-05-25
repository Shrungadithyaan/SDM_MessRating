<?php
session_start();
$food_id = $_SESSION['food_id'];
$hstl_id = $_SESSION['hostel'];
?>
<?php
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
            /* font-family: cursive; */
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


$query = "SELECT * FROM desc_rating d INNER JOIN food f ON d.food_id = f.food_id INNER JOIN users u ON d.user_id = u.user_id WHERE d.food_id = $food_id";
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
 <table class="table table-bordered table-striped " style="text-align:center;font-family:Raleway, sans-serif;">
  <tr class="table_hide">
   <th class="hide_it name_edit" style="background-color:white;color:grey;">Sr. No</th>
   <th class="hide_it name_edit" style="background-color:white;color:grey;">Roll Number</th>
   <th class="hide_it name_edit" style="background-color:white;color:grey;">Food Item</th>
<th class="hide_it name_edit" style="background-color:white;color:grey;">Comments</th>
 </tr>
 
';
if ($number_of_rows > 0) {
    $count = 0;
    foreach ($result as $row) {
        $count++;
        $output .= '
 

   <tr>
   <td class="name_edit">' . $count . '</td>
<td class="name_edit">' . $row["name"] . '</td>
<td class="name_edit">' . $row["food_item"] . '</td>
   <td class="name_edit">' . $row["description"] . '</td>
  </tr>
  
  ';
    }
} else {

    $output .= '
  <tr >
  
   <td colspan="4" >No Data Found</td>
  </tr>

 ';
}
$output .= '</table>';;
echo $output;

?>
<style>
    .hide_it {
        display: run-in;
    }

    .table_hide {
        display: run-in;
    }



    @media only screen and (max-width:400px) {
        .hide_it {
            display: none;
        }

        .table_hide {
            display: none;
        }


    }
</style>