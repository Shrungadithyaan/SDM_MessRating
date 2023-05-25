<?php
//delete.php
session_start();
include('../conn.php');
$name = $_GET['id'];
$date = $_GET['date'];
// if (isset($_POST["name"])) {
   
        $query = "DELETE FROM menu WHERE `food_id`='$name'AND Created_time='$date'";
        $result = $db->query($query);
            if ($result === TRUE) {
                ?>
                <script>
                alert("Menu Item deleted successfully.");
                window.location.href = "View_menu.php";
                </script>
                <?php
            }
            else{
                // $msg="Error: " . $query . "<br>" . $db->error;
                // echo $msg;
                ?>
                <script>
                alert("can't able to delete.");
                window.location.href = "View_menu.php";
                </script>
                <?php
            }
            ?>
// }
