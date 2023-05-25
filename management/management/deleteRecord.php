<?php
include('../../conn.php');


    $query = "DELETE FROM desc_rating";
    $statement = $db->prepare($query);
    $statement->execute();
    $query_one = "DELETE FROM rating";
    $statement_one = $db->prepare($query_one);
    $statement_one->execute();
    // echo "This is Button1 that is selected";


    // $query_one = "DELETE * FROM desc_rating";
    // header('location:../home.php');

?>
    <script>
        alert("Data Deleted Successfuly");
        window.location.replace('../index.php');
    </script>


