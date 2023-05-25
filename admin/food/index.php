<?php session_start();

// include '../../home.php';

include "../../conn.php";


$_SESSION['hostel'] = $_SESSION['hostel_id'];
$hstl = $_SESSION['hostel'];
?>
<?php


if (!isset($_SESSION['user_id'])) {
?>
    <script>
        window.location.href = "../../index.php";
    </script>
<?php
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>MessRating</title>
    <link rel="icon" href="../../images/sdm_logo.png" type="image/x-icon">
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







    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />



    <!-- bootstrap core css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> -->

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../css/responsive.css" rel="stylesheet" />




    <link rel="stylesheet" href="../../management/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="../../management/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/templatemo-style.css"> -->
    <link rel="stylesheet" href="../../management/css/templatemo-style.css">
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
        /* font-family:"Times New Roman" */


    }

    .name {
        color: #eb5424;
        font-size: 25px;
        font-weight: bold;
        margin-left: 15px;
    }
</style>

<body>

    <div class="navbar navbar-default bs-dos-nav navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <img src="../../management/sdm_logo.png" class="fa fa-bars" style="height: 90px; width: 90px;" />
                <a href="#" class="name" style="text-decoration:none">RateMyFood</a>
                <!-- <a href="./home.php" class="navbar-brand">Ideal Bits</a> -->


            </div>

            <nav class="collapse navbar-collapse" id="rock-navigation">
                <ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
                    <li><a href="../index.php" class="smoothScroll" style="color: #eb5424;">Home</a></li>
                    <li><a href="#" class="smoothScroll">Add Food</a></li>
                    <!-- <li><a href="index.php" class="smoothScroll">ADD MENU</a></li> -->
                    <li><a href="../View_menu.php" class="smoothScroll">View Menu</a></li>
                    <li><a href="../User1.php" class="smoothScroll">Users</a></li>
                    <li><a href="../cook.php" class="smoothScroll">Cooks</a></li>
                    <li><a href="../../logout_a.php" class="smoothScroll">Logout</a></li>



            </nav>

        </div>
    </div>
    <br />
    <div class="container">

        <h3 align="center" style="font-family:sans-serif; margin-top:10%"><u>Upload Food Menu</u></h3>

        <!-- HTML !-->
        <button class="button-33" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black " style="float:right;">Add Food </button>


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
                    <h3 style="color:#41cc74;font-family:sans-serif;"> Add Food</h3>
                </center>
                <form action="" method="post" name="form1" style="height: 50%;width:10%; padding-top:10%;margin-left:30px;">

                    <input type="text" name="food_item" placeholder="Food Name" class="button-30">
                    <br />
                    <br />
                    <select name="category" class="button-30" style="width:220px;height:50px;">
                        <option value="" class="input_design">Select Course</option>
                        <option value="Breakfast">Breakfast</option>
                        <option value="Lunch">Lunch</option>
                        <option value="Snack">Snack</option>
                        <option value="Dinner">Dinner</option>

                    </select>
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
            var food_id = $(this).attr("id");
            var category = $(this).data("category");
            if (confirm("Are you sure you want to remove it?")) {
                $.ajax({
                    url: "delete.php",
                    method: "POST",
                    data: {
                        food_id: food_id,
                        category: category
                    },
                    success: function(data) {
                        load_image_data();
                        alert("Food Item removed");
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
    <?php
    //including the database connection file
    include_once("../../conn.php");

    if (isset($_POST['Submit'])) {
        $category = mysqli_real_escape_string($db, $_POST['category']);
        $food_item = mysqli_real_escape_string($db, $_POST['food_item']);


        // checking empty fields
        if (empty($category) || empty($food_item)) {

            if (empty($category)) {
                echo "<font color='red'>Food name is empty</font><br/>";
            }

            if (empty($food_item)) {
                echo "<font color='red'>Category is empty</font><br/>";
            }



            //link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {
            // if all the fields are filled (not empty) 

            //insert data to database
            $hstl_id = $_SESSION['hostel'];
            $result = mysqli_query($db, "INSERT INTO food(hostel_id,category,food_item,status) VALUES('$hstl_id','$category','$food_item',0)");

            //display success message
        }
    }
    ?>


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