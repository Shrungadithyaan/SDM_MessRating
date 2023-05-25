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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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

</head>
<style>
    /* .form1{
       height: 100%;
    } */
    .button-33 {
        background-color: #c2fbd7;
        border-radius: 100px;
        box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
        color: green;
        cursor: pointer;
        display: inline-block;
        font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif;
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

    .button-33:hover {
        box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
        transform: scale(1.05) rotate(-1deg);
    }

    .button-30 {
        background-color: white;
        border-radius: 100px;
        box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
        color: black;
        cursor: pointer;
        display: inline-block;
        font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif;
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

    .dropdown-menu {
        text-align: center;
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

<body>

    <div class="back-button">
        <a href="index.php" onclick="history.back(); return false;">
            Back </a>
    </div>

    <div class="container">
        <h2 align="center" style="font-family:sans-serif; margin-top:15%">Hostel Name : <?php echo $_SESSION['hostel_name_display'] ?></h2>
        <h3 align="center" style="font-family:sans-serif;"><u>Management Members List</u></h3>

        <!-- HTML !-->
        <button class="button-33" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black " style="float:right;">Add Management</button>


        <br />

        <br />
        <div class="table-responsive" id="food_table">

        </div>
    </div>
</body>

</html>

<div class="w3-container ">
    <!-- <h2>W3.CSS Modal</h2> -->
    <!-- <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black modbtn" >Open Modal</button> -->

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content" style="width:20%;height:60%;">
            <div class="w3-container" style="margin-top:15%; ">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <br /><br />
                <center>
                    <h3 style="color:#41cc74;font-family:sans-serif;"> Add Management Member</h3>
                </center>
                <form action="add.php" method="post" name="form1" style="height: 50%;width:10%; padding-top:10%;margin-left:30px;">

                    <input type="number" name="manage_name" placeholder="User Id" class="button-30">
                    <br />
                    <br />
                    <input type="number" name="manage_pass" placeholder="Password" class="button-30">
                    <br />
                    <br />

                    <input class="button-33 " style="width:220px; margin-top:5%;" type="submit" name="Submit" value="Add">



                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        load_image_data();

        function load_image_data() {
            $.ajax({
                url: "fetch.php",
                method: "POST",
                success: function(data) {
                    $('#food_table').html(data);
                }
            });
        };
        $(document).on('click', '.edit', function() {
            var food_id = $(this).attr("id");
            $.ajax({
                url: "edit.php",
                method: "post",
                data: {
                    food_id: food_id
                },
                dataType: "json",
                success: function(data) {
                    $('#imageModal').modal('show');
                    $('#food_id').val(food_id);
                    $('#category').val(data.category);
                    $('#food_item').val(data.food_item);
                }
            });
        });
        $(document).on('click', '.delete', function() {
            var user_id = $(this).attr("id");

            if (confirm("Are you sure you want to remove it?")) {
                $.ajax({
                    url: "delete.php",
                    method: "POST",
                    data: {
                        user_id: user_id

                    },
                    success: function(data) {
                        load_image_data();
                        alert("Main management member removed");
                    }
                });
            }
        });
        $('#edit_food_form').on('submit', function(event) {
            event.preventDefault();
            if ($('#food_name').val() == '') {
                alert("Enter Image Name");
            } else {
                $.ajax({
                    url: "update.php",
                    method: "POST",
                    data: $('#edit_food_form').serialize(),
                    success: function(data) {
                        $('#imageModal').modal('hide');
                        load_image_data();
                        alert('Image Details updated');
                    }
                });
            }
        });
    });
</script>

<html>

<head>
    <title>Add Data</title>
</head>

<body>


    <script>
        function confirmation() {
            let text = "Are you sure you want to delete the data.";
            if (confirm(text) == true) {
                window.location.href = "../deleteRecord.php?name='button1'";
            } else {

            }
        }
    </script>

    <!-- <script src="../../js/jquery.js"></script> -->
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/smoothscroll.js"></script>
    <script src="../../js/jquery.nav.js"></script>
    <script src="../../js/isotope.js"></script>
    <script src="../../js/imagesloaded.min.js"></script>
    <script src="../../js/custom.js"></script>
</body>

</html>