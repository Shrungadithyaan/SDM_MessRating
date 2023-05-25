<?php
session_start();
?>
<html>

<head>
    <title>MessRating</title>
    <link rel="icon" href="../images/sdm_logo.png" type="image/x-icon">
</head>

<body>
    <?php
    //including the database connection file
    include_once("../conn.php");
    $userid = $_POST['id'];
    $password = $_POST['pass'];
    $sql = "INSERT INTO users(`name`,hostel_id,`role`,`password`) VALUES($userid,'{$_SESSION['hostel_id']}','Student','$password')";
    $result = $db->query($sql);

    if ($result === TRUE) {
    ?>
        <script>
            alert("User Data added successfully.");
            window.location.href = "User1.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Could not add the user");
            window.location.href = "User1.php";
        </script>
    <?php
    }
    //display success message

    echo "<br/><a href='User1.php'>View Result</a>";
    //     }
    // }
    ?>
</body>

</html>