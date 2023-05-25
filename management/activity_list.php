<?php
session_start();
include "../conn.php";
$_SESSION['hostel'] = $_GET['id'];
?>
<?php


if (!isset($_SESSION['id'])) {

?>
    <script>
        window.location.href = "../index.php";
    </script>
<?php
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MessRating</title>
    <link rel="icon" href="../images/sdm_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="u_home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/templatemo-style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- nav bar -->

    <link rel="stylesheet" href="/path/to/box-shadows.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/templatemo-style.css">
    <!-- <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .button-33 {
            background-color: white;
            border-radius: 10px;
            box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
            color: green;
            cursor: pointer;
            display: inline-block;
            /* font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif; */
            /* padding: 7px 20px; */
            text-align: center;
            text-decoration: none;
            transition: all 250ms;
            border: 0;
            font-size: 16px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            display: block;
            margin: 20px;
            width: 200px;
            height: 40px;
            /* font-family: cursive; */

            font-family: Raleway, sans-serif;
            font-weight: bold;

        }

        .button-33:hover {
            box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
            transform: scale(1.05) rotate(-1deg);
        }

        .logo {
            height: 120px;
            width: 120px;
        }

        @media screen and (max-width:300px) {
            .button-33 {
                width: 50%;
                height: 5%;
                font-size: 12px;
            }

            .logo {
                height: 60px;
                width: 60px;
            }

            .heading {
                font-size: 22px;
            }
        }



        .input_design {
            padding: 7px;
            border-radius: 6px;
            font-size: 16px;
            background: #fbfbfb;
            border: 2px solid transparent;
            height: 36px;
            box-shadow: 0 0 0 1px #dddddd, 0 2px 4px 0 rgb(0 0 0 / 7%), 0 1px 1.5px 0 rgb(0 0 0 / 5%);
        }

        :focus {
            border: 2px solid #000;
            border-radius: 4px;
        }









        /* //nav bar
     */


        .iframe_set {
            height: 800px;
            width: 1000px;
        }

        .word-waves span {
            position: absolute;
            color: black;
            font-size: 6rem;
            transform: translate(-50%, -50%);
            /* text-align: center; */
            /* margin: 200px 0px 0px 500px ; */
            margin-top: 20px;
            font-weight: bold;

        }

        .word-waves span:nth-child(1) {
            color: transparent;
            -webkit-text-stroke: 0.9px #eb5424;
            font-weight: bold;


        }



        .word-waves span:nth-child(2) {
            color: #eb5424;
            -webkit-text-stroke: 0.9px #eb5424;
            animation: animation 3s ease-in-out infinite;
            font-weight: bold;
        }



        @keyframes animation {

            0%,
            100% {
                clip-path: polygon(0% 45%, 15% 44%, 32% 50%, 54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%);
            }

            50% {
                clip-path: polygon(0% 60%, 16% 65%, 34% 66%, 51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%);
            }

        }

        @media only screen and (max-width :600px) {
            .word-waves span {
                font-size: 3rem;
            }

            #menubar {
                font-size: 9px;
            }

            .iframe_set {
                height: 500px;
                width: 960px;
                overflow-x: none;
                overflow-y: scroll;
            }

            .tm-red-text {
                font-size: 2.5rem;
            }
        }

        @media only screen and (max-width :900px) {
            .word-waves span {

                font-size: 3rem;


            }

            .calendar_scroll {
                overflow-x: scroll;
            }
        }



        body {
            /* background: #262a2b; */
            background: white;


        }

        .name {
            color: #eb5424;
            font-size: 25px;
            font-weight: bold;
            margin-left: 15px;
        }

        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 9999;
        }

        .back-button a {
            display: inline-block;
            height: 30px;
            /* set the height to 20px */
            width: 80px;
            /* set the width to 60px */
            line-height: 20px;
            /* vertically center the text */
            text-align: center;
            /* horizontally center the text */
            background-color: #333;

            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
        }

        .back-button a:hover {
            background-color: #666;
        }

        @media only screen and (max-width: 768px) {
            .back-button {
                top: 10px;
                left: 10px;
            }

            .back-button a {
                font-size: 14px;
                height: 30px;
                /* adjust the height for smaller screens */
                width: 80px;
                /* adjust the width for smaller screens */
                line-height: 16px;
                /* vertically center the text */
            }
        }
    </style>

</head>

<body style="background-color:#ececec">






    <?php
    // $sql = "select * from  food  where hostel_id='.$_SESSION[hostel_id].' and category='$category' and status='1'";

    // echo $day;
    $sql = "SELECT * FROM hostel where hostel_id='{$_SESSION['hostel']}'";
    // echo $sql;

    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        // $foodid = array();
        // $ratings = array();

        while ($row = $result->fetch_assoc()) {
            $hostel_name = $row['hostel_name'];
            $_SESSION['hostel_name_display'] = $hostel_name;
        }
    ?>


    <?php
    } else {
        // echo "0 results";echo $cal;
        // header('Location:../notfound.php');
    ?>
        <script>
            // alert("No data found");
            // window.location.href = "home.php";
        </script>
        <?php
        ?>

        <!-- window.location.notfound.php; -->
    <?php
    }

    ?>














    <div class="back-button">
        <a href="index.php" onclick="history.back(); return false;">
            Home
        </a>
    </div>
    <div class="centerer" style="margin-top:100px">
        <center>
            <h2 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Hostel Name : <?php echo $hostel_name ?></h2>
            </ <img src="../images/sdm_logo.png" class="fa fa-bars logo" style="" />

            <div align="center">
                <p></p>
                <a style="text-decoration: none;" class="button-33" href="./management/AddRating/home.php"><span style="margin-top:20px">Rating</span></a>
                <a style="text-decoration: none;" class="button-33" href="./management/food/index.php">Add Management</a>
                <a style="text-decoration: none;" class="button-33" href="./management/rating/index.php">Review</a>
                <a style="text-decoration: none;" class="button-33" href="./management/report/Report.php">Comments Report</a>
                <a style="text-decoration: none;" class="button-33" href="./management/rating_report/Report.php">Rating Report</a>
                <a style="text-decoration: none;" class="button-33" href="./management/active_stu/Report.php">Students Report</a>
                <a style="text-decoration: none;" class="button-33" href="./management/deleteRecord.php">Delete Record</a>
                <a style="text-decoration: none;" class="button-33" href="../logout.php">Logout</a>

            </div>

    </div>


    <script>
        function confirmation() {
            let text = "Are you sure you want to delete the data.";
            if (confirm(text) == true) {
                window.location.href = "../deleteRecord.php?name='button1'";
            } else {

            }
        }
    </script>

    <script>
        $(function() {
            $('.btn-6')
                .on('mouseenter', function(e) {
                    var parentOffset = $(this).offset(),
                        relX = e.pageX - parentOffset.left,
                        relY = e.pageY - parentOffset.top;
                    $(this).find('span').css({
                        top: relY,
                        left: relX
                    })
                })
                .on('mouseout', function(e) {
                    var parentOffset = $(this).offset(),
                        relX = e.pageX - parentOffset.left,
                        relY = e.pageY - parentOffset.top;
                    $(this).find('span').css({
                        top: relY,
                        left: relX
                    })
                });
        });
    </script>
</body>

</html>