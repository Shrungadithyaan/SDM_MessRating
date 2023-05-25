<?php session_start();

// include '../../home.php';
include "../../../conn.php";

$hstl = $_SESSION['hostel'];
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

<?php
//delete.php

include('../../../conn.php');

if (isset($_POST["user_id"])) {

        $query = "DELETE FROM users WHERE user_id = '" . $_POST["user_id"] . "'";
        $statement = $db->prepare($query);
        $statement->execute();
}
