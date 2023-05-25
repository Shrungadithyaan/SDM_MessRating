<?php
// include '../../home.php';
?>
<?php session_start();
$SESSION['hostel'] = $_SESSION['hostel'];
$_SESSION['food_id'] = $_GET['food_id'];
?>
<?php
include("../../../conn.php");

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
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #333;
            color: white;
            font-weight: bold;
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
                content: "SR. NO";

            }

            td:nth-of-type(2):before {
                content: "ROLL NUMBER";
            }

            td:nth-of-type(3):before {
                content: "FOOD ITEM";
            }

            td:nth-of-type(4):before {
                content: "COMMENTS";
            }

            /* td:nth-of-type(5):before {
                content: "VIEW COMMENTS";
            } */

            /* td:nth-of-type(6):before {
                content: "Secret Alias";
            }

            td:nth-of-type(7):before {
                content: "Date of Birth";
            }

            td:nth-of-type(8):before {
                content: "Dream Vacation City";
            }

            td:nth-of-type(9):before {
                content: "GPA";
            }

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

        .dropdown-menu {
            text-align: center;
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

<body>
    <div class="back-button">
        <a href="index.php" onclick="history.back(); return false;">
            Back </a>
    </div>
    <h2 align="center" style="font-family:sans-serif; margin-top:13%">Hostel Name : <?php echo $_SESSION['hostel_name_display'] ?></h2>
    <br />
    <header>
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    </header>
    <div class="container">

        <h3 align="center" style="font-family:Raleway, sans-serif; margin-top:10px"><u>View Comments</u></h3>
        <br />

        <br />
        <div class="table-responsive" id="food_table">

        </div>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        load_image_data();

        function load_image_data() {
            $.ajax({
                url: "view_com_fetch.php",
                method: "POST",
                success: function(data) {
                    $('#food_table').html(data);
                }
            });
        };

        // $('#edit_food_form').on('submit', function(event) {
        // 	event.preventDefault();
        // 	if ($('#food_name').val() == '') {
        // 		alert("Enter Image Name");
        // 	} else {
        // 		$.ajax({
        // 			url: "update.php",
        // 			method: "POST",
        // 			data: $('#edit_food_form').serialize(),
        // 			success: function(data) {
        // 				$('#imageModal').modal('hide');
        // 				load_image_data();
        // 				alert('Image Details updated');
        // 			}
        // 		});
        // 	}
        // });
    });
</script>

<script>
    function confirmation() {
        let text = "Are you sure you want to delete the data.";
        if (confirm(text) == true) {
            window.location.href = "../deleteRecord.php?name='button1'";
        } else {

        }
    }
</script>
<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/smoothscroll.js"></script>
<script src="../../js/jquery.nav.js"></script>
<script src="../../js/isotope.js"></script>
<script src="../../js/imagesloaded.min.js"></script>
<script src="../../js/custom.js"></script>