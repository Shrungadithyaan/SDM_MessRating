<?php
include '../conn.php';
session_start();

if ($_SESSION['rate'] != '') {
    // $sql = "INSERT INTO desc_rating(user_id,food_id,`description`) VALUES ({$_SESSION['id']},{$_SESSION['foodid']},'{$_POST['desc']}')";

    $sql = "INSERT INTO desc_rating(rating_id,user_id,food_id,`description`) select max(rating_id),{$_SESSION['id']},{$_SESSION['foodid']},'{$_POST['desc']}' from rating";
    if (mysqli_query($db, $sql)) {
        $cat = $_SESSION['cal'];
        // echo '<script>';
        // echo 'alert("description Ratings added successfully!");window.location.href="student_menu.php?value='$cat;'"';
        // echo '';               
        // echo 'history.back()';
        // echo '</script>';
?>
        <script>
            alert("Ratings added successfully!");
            window.location.href = "student_menu.php?value=<?php echo $cat ?>";
        </script>
<?php


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}


?>