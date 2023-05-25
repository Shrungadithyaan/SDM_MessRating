<?php

session_start();
include "../../../conn.php";



// include '../../home.php';


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

<!DOCTYPE html>
<html>

<head>
    <title>MessRating</title>
    <link rel="icon" href="../../../images/sdm_logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../css/templatemo-style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../css/res-table.css">
    <link href="../../css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- nav bar -->

    <link rel="stylesheet" href="/path/to/box-shadows.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/templatemo-style.css">
    <!-- <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .button-33 {
            background-color: #c2fbd7;
            border-radius: 100px;
            box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
            color: green;
            cursor: pointer;
            display: inline-block;
            /* font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif; */
            padding: 7px 20px;
            text-align: center;
            font-family: Raleway, sans-serif;
            text-decoration: none;
            transition: all 250ms;
            border: 0;
            width: 230px;
            font-size: 16px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-33:hover {
            box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
            transform: scale(1.05) rotate(-1deg);
        }

        .button-30 {
            background-color: white;
            border-radius: 100px;
            box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
            color: green;
            cursor: pointer;
            display: inline-block;
            /* font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif; */
            font-family: Raleway, sans-serif;
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            transition: all 250ms;
            border: 0;
            font-size: 16px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-30:hover {
            box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
            transform: scale(1.05) rotate(-1deg);
        }

        @media only screen and (max-width: 400px) {
            .button-33 {
                margin-top: 30px;
                margin-left: 90px;

            }



            .button-30 {
                margin-top: 30px;
            }



        }

        .style_text {
            color: #41cc74;
            /* font-family: cursive; */
            font-size: 16px;
        }

        .div_style {
            display: inline-block;
        }

        input,
        select {
            border-radius: 5px;
        }

        select {
            margin-left: 17px;
            width: 210px;
            height: 30px;
            -webkit-appearance: none;
            padding: 5px;
        }

        /* body{
            background-image: url('images/hero-bg.jpg');
            background-size: ;
            background-position: center;;
        } */


        input,
        select {
            border-radius: 5px;
        }

        select {
            margin-left: 17px;
            width: 210px;
            height: 30px;
            -webkit-appearance: none;
            padding: 5px;
        }

        /* body{
            background-image: url('images/hero-bg.jpg');
            background-size: ;
            background-position: center;;
        } */



        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Raleway, sans-serif;
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #333;
            color: white;
            font-weight: bold;
            font-family: Raleway, sans-serif;
        }

        td,
        th {
            padding: 6px;
            border: 1px solid #ccc;
            text-align: left;
        }

        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {

            /* Force table to not be like tables anymore */
            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            /* Hide table headers (but not display: none;, for accessibility) */
            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;

            }

            th {
                color: black;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding: 0;
            }

            .dropdown-menu {
                text-align: center;
            }

            td:before {
                /* Now like a table header */
                position: absolute;
                /* Top/left values mimic padding */
                top: 6px;
                left: 0px;
                width: 45%;
                float: left;
                padding-right: 200px;
                /* white-space: nowrap; */
            }

            /*
	Label the data
	*/


            td:nth-of-type(1):before {
                margin-left: 20px;
                content: "SR.NO";


            }

            td:nth-of-type(2):before {
                margin-left: 20px;
                content: "HOSTEL";
            }

            td:nth-of-type(3):before {
                margin-left: 20px;
                content: "ROLL_NUMBER";
            }

            td:nth-of-type(4):before {
                margin-left: 20px;
                content: "CATEGORY";
            }

            td:nth-of-type(5):before {
                margin-left: 20px;
                content: "FOOD_NAME";
            }

            td:nth-of-type(6):before {
                margin-left: 20px;
                content: "COOK_NAME";
            }

            td:nth-of-type(7):before {
                margin-left: 20px;
                content: "RATING";
            }

            td:nth-of-type(8):before {
                margin-left: 20px;
                content: "COMMENTS";
            }


            /* td:nth-of-type(9):before {
                content: "GPA";
            } */
            /* 
            td:nth-of-type(10):before {
                content: "Arbitrary Data";
            } */
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

        #menubar {
            font-size: 12px;
            font-family: Montserrat, sans-serif;
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

        .navbar-default .navbar-brand {
            /* color: #212227; */
            color: #eb5424;
            font-weight: bold;
            font-size: 30px;
            line-height: 45px;
            padding: 10px 0 0 12px;
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

        @media screen and (max-width:480px) {
            .button-30 {
                margin-bottom: 20px;
            }
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

<body style="font-family:Raleway, sans-serif;">
    <div class="back-button">
        <a href="index.php" onclick="history.back(); return false;">
            Back </a>
    </div>
    <div class="area" id="body1">

        <div class="main-divi" id="body1">
            <div class=" card_container m-1 row" id="body1">


                <br>


                <br>

                <center>
                    <div class="div_style" style="margin-top:6%;">
                        <h2 align="center" style="font-family:sans-serif; margin-top:0%">Hostel Name : <?php echo $_SESSION['hostel_name_display'] ?></h2>
                        <form action="" method="POST">


                            <h3 class="style_text" style="padding-top:20px;"><u>Generate Report:</u></h3>
                            <label for="startdate" class="style_text"> <b>Start Date:</b> </label>
                            &nbsp;&nbsp;
                            <input type="datetime-local" name="startdate" class="inputFilterDate button-30" id="startdate t1" autocomplete="off" required>
                            &nbsp;&nbsp;&nbsp;
                            <label for="enddate" class="style_text"> <b>End Date:</b> </label>
                            &nbsp;&nbsp;&nbsp;
                            <input type="datetime-local" name="enddate" class="inputFilterDate button-30" id="enddate t1" autocomplete="off" required>
                            &nbsp; &nbsp;
                            <input type='submit' value='Submit' class='button-33'>


                        </form>

                    </div>
                    <center>

                        <?php

                        error_reporting(0);

                        // $startdate = "0000-00-00 00:00:00.000000";
                        // $enddate = "0000-00-00 00:00:00.000000";

                        $startdate = $_POST['startdate'];
                        $enddate = $_POST['enddate'];

                        $_SESSION['startdate'] = $startdate;
                        $_SESSION['enddate'] = $enddate;

                        // $sql = "SELECT * FROM food f CROSS JOIN desc_rating d ON f.food_id = d.food_id CROSS JOIN users u ON u.user_id = d.user_id CROSS JOIN rating r ON r.hostel_id = r.hostel_id CROSS JOIN hostel h ON h.hostel_id = r.hostel_id CROSS JOIN cook c ON c.hostel_id = h.hostel_id WHERE timestamp BETWEEN '$startdate' AND '$enddate' ";
                        // $sql = "SELECT * FROM food f UNION SELECT * FROM desc_rating d";
                        $sql = "SELECT * FROM desc_rating d INNER JOIN rating r ON d.rating_id=r.rating_id INNER JOIN food f ON r.food_id = f.food_id INNER JOIN users u ON r.user_id = u.user_id INNER JOIN cook c ON r.cook_id = c.cook_id INNER JOIN hostel h ON c.hostel_id = h.hostel_id WHERE timestamp BETWEEN '$startdate' AND '$enddate' and r.hostel_id = $hstl ORDER BY f.category";



                        // $sql_one = "SELECT * FROM desc_rating d INNER JOIN rating r ON d.rating_id=r.rating_id WHERE r.timestamp BETWEEN 'start' AND '$ed'";
                        // $result_one = mysqli_query($mysqli, $sql_one);

                        // if ($result_one === FALSE) {
                        //     die(mysqli_error($mysqli));
                        // }

                        // $row_one = mysqli_fetch_assoc($result_one);


                        $result = $db->query($sql);
                        $order_id = array();

                        ?>



                        <div class="tables">

                            <?php
                            ?>
                            <table>
                                <thead>
                                    <tr>
                                        <th style="background-color:white;color:grey;font-family:Raleway, sans-serif;">SR. NO</th>
                                        <th style="background-color:white;color:grey;font-family:Raleway, sans-serif;">HOSTEL</th>
                                        <th style="background-color:white;color:grey;font-family:Raleway, sans-serif;">ROLL NUMBER</th>
                                        <th style="background-color:white;color:grey;font-family:Raleway, sans-serif;">CATEGORY</th>

                                        <th style="background-color:white;color:grey;font-family:Raleway, sans-serif;">FOOD NAME</th>
                                        <th style="background-color:white;color:grey;font-family:Raleway, sans-serif;">COOK NAME</th>
                                        <th style="background-color:white;color:grey;font-family:Raleway, sans-serif;">RATING</th>
                                        <th style="background-color:white;color:grey;font-family:Raleway, sans-serif;">COMMENTS</th>
                                        <th style="background-color:white;color:grey;font-family:Raleway, sans-serif;width:10px"></th>
                                    </tr>
                                </thead>

                                <?php
                                if ($result->num_rows > 0) {
                                    $count = 0;
                                    while ($row = $result->fetch_assoc()) {
                                        $count++;
                                        echo "
                            <tbody id='myTable'> ";
                                ?>

                                <?php

                                        date_default_timezone_set("Asia/Kolkata");

                                        echo "
                           
                            <td style='margin-left:20px;font-family:Raleway, sans-serif;'>" . $count . "</td>
                            <td style='margin-left:20px;font-family:Raleway, sans-serif;'>" . $row['hostel_name'] . "</td>
                            <td style='margin-left:20px;font-family:Raleway, sans-serif;'>" . $row['name'] . "</td>
                            <td style='margin-left:20px;font-family:Raleway, sans-serif;'>" . $row['category'] . "</td>
                            <td style='margin-left:20px;font-family:Raleway, sans-serif;'>" . $row['food_item'] . "</td>
                            <td style='margin-left:20px;font-family:Raleway, sans-serif;'>" . $row['cook_name'] . "</td>
                            <td style='margin-left:20px;font-family:Raleway, sans-serif;'>" . $row['rating'] . "</td>
                            <td style='margin-left:20px;font-family:Raleway, sans-serif;'>" . $row['description'] . "</td>
                            <td style='margin-right:20px;font-family:Raleway, sans-serif;'></td>
                                             
                            ";
                                    }
                                }

                                echo "</tbody>";
                                echo "</table>";

                                ?>
                                <br />
                                <div style="margin-right:30px;">
                                    <?php
                                    echo "
                            <a href='excelReport.php?sd=$_SESSION[startdate]&ed=$_SESSION[enddate]'>
                                <button style='z-index:100; float:right; margin-bottom:20px; background-color:lightblue;' class='excelReportBtn button-33'>Excel Report</button>
                            </a>
                            ";


                                    ?>
                                </div>
                        </div>

                        <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
            </div>
        </div>

    </div>
    <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

    <script>
        function confirmation() {
            let text = "Are you sure you want to delete the data.";
            if (confirm(text) == true) {
                window.location.href = "../deleteRecord.php?name='button1'";
            } else {

            }
        }
    </script>


    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/jquery.nav.js"></script>
    <script src="../js/isotope.js"></script>
    <script src="../js/imagesloaded.min.js"></script>
    <script src="../js/custom.js"></script>

</body>

</html>