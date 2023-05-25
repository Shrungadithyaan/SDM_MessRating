<?php
//delete.php
session_start();
include('../conn.php');
$name = $_GET['name'];
// if (isset($_POST["name"])) {
   
        $query = "DELETE FROM users WHERE `name`='$name'";
        $result = $db->query($query);
            if ($result === TRUE) {
                ?>
                <script>
                alert("User Data deleted successfully.");
                window.location.href = "User1.php";
                </script>
                <?php
            }
            else{
                // $msg="Error: " . $query . "<br>" . $db->error;
                // echo $msg;
                ?>
                <script>
                alert("could not delete, the rating of these students is still being reviewed");
                window.location.href = "User1.php";
                </script>
                <?php
            }
            ?>
// }
