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
<?php
//delete.php

include('../../conn.php');

if (isset($_POST["food_id"])) {

        $query = "DELETE FROM food WHERE food_id = '" . $_POST["food_id"] . "'";
        $statement = $db->prepare($query);
        $statement->execute();
}
