<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MessRating</title>
    <link rel="icon" href="../images/sdm_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Comment</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Reason for your dislike in food.</p>
                    <form action="add_desc.php" method="post">
                        <div class="form-group">
                            <!-- <input type="text" class="form-control" placeholder="Name"> -->
                            <textarea rows="5" cols="50" name="desc"></textarea>
                        </div>
                        <!-- <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div><br> -->
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include "../conn.php";
global $desc;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cook = $_POST['cookid'];
    $_SESSION['rate'] = $_POST['rating'];
    $_SESSION['foodid'] = $_POST['foodid'];
    $cat = $_SESSION['cal'];
    $date = date('Y-m-d');
    
    if ($_POST['rating'] != null) {

        $query = "SELECT * FROM rating WHERE CAST(timestamp as DATE)='$date' and food_id='{$_SESSION['foodid']}' and user_id='{$_SESSION['id']}'";
        $result = $db->query($query);
        if ($result->num_rows == 0) {
            $sql = "INSERT INTO rating(hostel_id,user_id,food_id,rating,cook_id) VALUES ({$_SESSION['hostel_id']},{$_SESSION['id']},'{$_POST['foodid']}',{$_POST['rating']},$cook)";
            if (mysqli_query($db, $sql)) {
                if ($_POST['rating'] < 3) {
?>
                    <script>
                        $(document).ready(function() {
                            $("#myModal").modal('show');
                        });
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert("Ratings added successfully!");
                        window.location.replace('student_menu.php?value=<?php echo $cat; ?>');
                    </script>
            <?php
            // echo $query;
                }
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
            }
        } else {
            ?>
            <script>
                alert("Ratings already inserted");
                window.location.replace('student_menu.php?value=<?php echo $cat; ?>');
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert("Please provide the Ratings");
            window.location.replace('student_menu.php?value=<?php echo $cat; ?>');
        </script>
<?php
    }
}
// }
?>