<?php
session_start();
include "../conn.php";
?>
<?php


if (!isset($_SESSION['user_id'])) {
?>
    <script>
        window.location.href = "../index.php";
    </script>
<?php
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>MessRating</title>
    <link rel="icon" href="../images/sdm_logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> -->

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/res-table.css">


    <link rel="stylesheet" href="../management/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="../management/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/templatemo-style.css"> -->
    <link rel="stylesheet" href="../management/css/templatemo-style.css">
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

        .uinput {
            margin-left: 30px;
        }



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
                content: "User Id";
            }

            td:nth-of-type(2):before {
                content: "User Name";
            }

            td:nth-of-type(3):before {
                content: "Password";
            }

            /* td:nth-of-type(4):before { content: "Favorite Color"; }
	td:nth-of-type(5):before { content: "Wars of Trek?"; }
	td:nth-of-type(6):before { content: "Secret Alias"; }
	td:nth-of-type(7):before { content: "Date of Birth"; }
	td:nth-of-type(8):before { content: "Dream Vacation City"; }
	td:nth-of-type(9):before { content: "GPA"; }
	td:nth-of-type(10):before { content: "Arbitrary Data"; } */
            .uinput {
                margin-left: 15px;
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

        .button-30:hover {
            box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
            transform: scale(1.05) rotate(-1deg);
        }
    </style>
</head>

<body>
    <br />


    <div class="navbar navbar-default bs-dos-nav navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <img src="../management/sdm_logo.png" class="fa fa-bars" style="height: 90px; width: 90px;" />
                <a href="#" class="name" style="text-decoration:none">RateMyFood</a>
                <!-- <a href="./home.php" class="navbar-brand">Ideal Bits</a> -->


            </div>

            <nav class="collapse navbar-collapse" id="rock-navigation">
                <ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
                    <li><a href="index.php" class="smoothScroll">Home</a></li>
                    <li><a href="food/index.php" class="smoothScroll">Add Food</a></li>
                    <!-- <li><a href="index.php" class="smoothScroll">ADD MENU</a></li> -->
                    <li><a href="View_menu.php" class="smoothScroll">View Menu</a></li>
                    <li><a href="#" class="smoothScroll" style="color: #eb5424;">Users</a></li>
                    <li><a href="cook.php" class="smoothScroll">Cooks</a></li>
                    <li><a href="../logout_a.php" class="smoothScroll">Logout</a></li>

            </nav>

        </div>
    </div>


    <br><br><br>
    <div class="container">

        <h3 align="center" style="font-family:cambria;"><u>Student Details</u></h3>
        <br />
        <div style="float:right;">
            <button onclick="document.getElementById('id01').style.display='block'" class="button-33" style="background-color: lightgreen;border-radius:5px;">Add User</button>

        </div>
        <br />
        <br>
        <div class="table-responsive" id="food_table">

        </div>
    </div>
</body>

</html>
<div id="imageModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" id="edit_food_form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Image Details</h4>
                </div>
                <div class="modal-body" style="padding:10px;">
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="category" id="category" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Food Item</label>
                        <input type="text" name="food_item" id="food_item" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="food_id" id="food_id" value="" />
                    <input type="submit" name="submit" class="btn btn-info" value="Edit" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="w3-container">
    <!-- <h2>W3.CSS Modal</h2>
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button> -->

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content" style="width:25%;border-radius:10px;">
            <div class="w3-container" style="padding: 20px;margin-top:100px;">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <form action="addUser.php" method="post" name="form1">
                    <!-- <table width="50%" border="0" >
                        <tr>
                            <td>Category : </td>
                            <td><input type="text" name="category"></td>
                        </tr>
                        <tr>
                            <td>Food Item : </td>
                            <td><input type="text" name="food_item"></td>
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td><input type="submit" name="Submit" value="Add"></td>
                        </tr>
                    </table> -->
                    <label style="margin-top:40px">User Id : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="number" class="" name="id" required />
                    <br><br>
                    <!-- <input type="text" style="margin-left: 17px;"/></br></br> -->
                    <!-- <label>User Name: </label>
                    <input type="text" style="margin-left: 5px;" name="name"/></br></br> -->

                    <label>Password: </label>
                    <input type="password" style="margin-left: 15px;" class="" name="pass" required /></br></br>
                    <button type="submit" class="button-33" style="background-color: lightgreen;border-radius:5px;">Add</button>
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
        // $(document).on('click', '.delete', function() {
        //     var food_id = $(this).attr("id");
        //     // var category = $(this).data("category");
        //     if (confirm("Are you sure you want to remove it?")) {
        //         $.ajax({
        //             url: "delete.php",
        //             method: "POST",
        //             dataType: "html", 
        //             data: {
        //                 name: food_id
        //             },
        //             success: function(data) {
        //                 load_image_data();
        //                 alert("Image removed");
        //                 $('#msg').html(data);
        //                 $('#table-container').load('fetch-data.php');;
        //             }
        //         });
        //     }
        // });
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

<!-- <script src="../management/js/jquery.js"></script> -->
<script src="../management/js/bootstrap.min.js"></script>
<script src="../management/js/smoothscroll.js"></script>
<script src="../management/js/jquery.nav.js"></script>
<script src="../management/js/isotope.js"></script>
<script src="../management/js/imagesloaded.min.js"></script>
<script src="../management/js/custom.js"></script>