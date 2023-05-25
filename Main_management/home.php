<?php
session_start();
include "../conn.php";

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>MessRating</title>
    <link rel="icon" href="../images/sdm_logo.png" type="image/x-icon">
    <style>
        :root {
            --bg-color: rgb(255, 255, 255);
            --card-color: rgba(251, 75, 2, 1);
        }

        body {
            align-items: center;
            background-color: var(--bg-color);
            display: flex;
            height: 100vh;
            justify-content: center;
            margin: 0px;
            overflow: hidden;
            padding: 0px;
        }

        #cards {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            max-width: 916px;
            width: calc(100% - 20px);
        }

        #cards:hover>.card::after {
            opacity: 1;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            /* cursor: pointer; */
            display: flex;
            height: 150px;
            flex-direction: column;
            position: relative;
            width: 200px;
        }

        .card:hover::before {
            opacity: 1;
        }

        .card::before,
        .card::after {
            border-radius: inherit;
            content: "";
            height: 100%;
            left: 0px;
            opacity: 0;
            position: absolute;
            top: 0px;
            transition: opacity 500ms;
            width: 100%;
        }

        .card::before {
            background: radial-gradient(800px circle at var(--mouse-x) var(--mouse-y),
                    rgba(255, 255, 255, 0.06),
                    transparent 40%);
            z-index: 3;
        }

        .card::after {
            background: radial-gradient(600px circle at var(--mouse-x) var(--mouse-y),
                    rgba(255, 255, 255, 0.4),
                    transparent 40%);
            z-index: 1;
        }

        .card>.card-content {
            background-color: var(--card-color);
            border-radius: inherit;
            align-items: center;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            inset: 1px;
            padding: 10px;
            position: absolute;
            z-index: 2;
        }

        /* -- ↓ ↓ ↓ extra card content styles ↓ ↓ ↓ -- */

        h1,
        h2,
        h3,
        h4,
        span {
            color: rgb(240, 240, 240);
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 400;
            margin: 0px;
        }

        i {
            color: rgb(240, 240, 240);
        }

        .card-image {
            align-items: center;
            display: flex;
            height: 140px;
            justify-content: center;
            overflow: hidden;
        }

        .card-image>i {
            font-size: 6em;
            opacity: 0.25;
        }

        .card-info-wrapper {
            align-items: center;
            text-align: center;
            display: flex;
            flex-grow: 1;
            justify-content: flex-start;
            padding: 0px 20px;
        }

        .card-info {
            align-items: flex-start;
            display: flex;
            gap: 10px;
        }

        .card-info>i {
            font-size: 1em;
            height: 20px;
            line-height: 20px;
        }

        .card-info-title {
            font-size: 1.1em;
            line-height: 20px;
            text-align: center;
        }

        /* .card-info-title > h4 {
  color: rgba(255, 255, 255, 0.5);
  font-size: 0.85em;
  margin-top: 8px;
  text-align: center;
} */

        /* -- ↓ ↓ ↓ some responsiveness ↓ ↓ ↓ -- */

        @media(max-width: 1000px) {
            body {
                align-items: flex-start;
                overflow: auto;
            }

            #cards {
                max-width: 1000px;
                padding: 10px 0px;
            }

            .card {
                flex-shrink: 1;
                width: calc(50% - 4px);
            }
        }

        @media(max-width: 500px) {
            .card {
                height: 180px;
            }

            .card-image {
                height: 80px;
            }

            .card-image>i {
                font-size: 3em;
            }

            .card-info-wrapper {
                padding: 0px 10px;
            }

            .card-info>i {
                font-size: 0.8em;
            }

            .card-info-title>h3 {
                font-size: 0.9em;
            }

            .card-info-title>h4 {
                font-size: 0.8em;
                margin-top: 4px;
            }
        }

        @media(max-width: 320px) {
            .card {
                width: 100%;
            }

            .div_style {
                margin-top: -50px;

            }
        }

        .div_style {
            margin-top: -650px;
        }



        /* -- ↓ ↓ ↓ YouTube link styles ↓ ↓ ↓ -- */
    </style>
</head>

<body>


    <div id="cards">

        <div class="card" onclick="location.href='AddRating/home.php?id=1'">

            <div class="card-content" style="background-color:coral;">
                <!-- <div class="card-image">
              <i class='fas fa-building' ></i>
            </div> -->
                <div class="card-info-wrapper">

                    <div class="card-info">
                        <!-- <i class='fas fa-building' ></i> -->
                        <div class="card-info-title">
                            <h3 style="text-align: center;">Siddhi IT Girls Hostel
                            </h3>
                            <!-- <h4>Places to be apart. Wait, what?</h4> -->
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>

        <div class="card" onclick="location.href='AddRating/home.php?id=2'">
            <div class="card-content" style="background-color:coral;">
                <!-- <div class="card-image">
              <i class="fa-duotone fa-otter"></i>
            </div> -->
                <div class="card-info-wrapper">
                    <div class="card-info">
                        <!-- <i class="fa-duotone fa-otter"></i> -->
                        <div class="card-info-title">
                            <h3>Akshara IT Boys Hostel</h3>
                            <!-- <h4>Look at me, imma cute lil fella.</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" onclick="location.href='AddRating/home.php?id=3'">
            <div class="card-content" style="background-color:coral;">
                <!-- <div class="card-image">
              <i class="fa-duotone fa-blender-phone"></i>
            </div> -->
                <div class="card-info-wrapper">
                    <div class="card-info">
                        <!-- <i class="fa-duotone fa-blender-phone"></i> -->
                        <div class="card-info-title">
                            <h3>Dheemanth PG Boys Hostel</h3>
                            <!-- <h4>These absolutely deserve to exist.</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" onclick="location.href='AddRating/home.php?id=4'">
            <div class="card-content" style="background-color:coral;">
                <!-- <div class="card-image">
              <i class="fa-duotone fa-person-to-portal"></i>
            </div> -->
                <div class="card-info-wrapper">
                    <div class="card-info">
                        <!-- <i class="fa-duotone fa-person-to-portal"></i> -->
                        <div class="card-info-title">
                            <h3>Dheemahi PG Girls Hostel</h3>
                            <!-- <h4>See you...</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" onclick="location.href='AddRating/home.php?id=5'">
            <div class="card-content" style="background-color:coral;">
                <!-- <div class="card-image">
              <i class="fa-duotone fa-person-from-portal"></i>
            </div> -->
                <div class="card-info-wrapper">
                    <div class="card-info">
                        <!-- <i class="fa-duotone fa-person-from-portal"></i> -->
                        <div class="card-info-title">
                            <h3>Mythreyee - A</h3>
                            <!-- <h4>...over here.</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" onclick="location.href='AddRating/home.php?id=6'">
            <div class="card-content" style="background-color:coral;">
                <!-- <div class="card-image">
              <i class="fa-duotone fa-otter"></i>
            </div> -->
                <div class="card-info-wrapper">
                    <div class="card-info">
                        <!-- <i class="fa-duotone fa-otter"></i> -->
                        <div class="card-info-title">
                            <h3>Mythreyee - B</h3>
                            <!-- <h4>Look at me, imma cute lil fella.</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" onclick="location.href='AddRating/home.php?id=7'">
            <div class="card-content" style="background-color:coral;">
                <!-- <div class="card-image">
                <i class="fa-duotone fa-otter"></i>
              </div> -->
                <div class="card-info-wrapper">
                    <div class="card-info">
                        <!-- <i class="fa-duotone fa-otter"></i> -->
                        <div class="card-info-title">
                            <h3>Akshaya IT Boys Hostel</h3>
                            <!-- <h4>Look at me, imma cute lil fella.</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" onclick="location.href='AddRating/home.php?id=8'">
            <div class="card-content" style="background-color:coral;">
                <!-- <div class="card-image">
                <i class="fa-duotone fa-otter"></i>
              </div> -->
                <div class="card-info-wrapper">
                    <div class="card-info">
                        <!-- <i class="fa-duotone fa-otter"></i> -->
                        <div class="card-info-title">
                            <h3>Vriddhi IT Girls Hostel</h3>
                            <!-- <h4>Look at me, imma cute lil fella.</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" onclick="location.href='AddRating/home.php?id=9'">
            <div class="card-content" style="background-color:coral;">
                <!-- <div class="card-image">
                <i class="fa-duotone fa-otter"></i>
              </div> -->
                <div class="card-info-wrapper">
                    <div class="card-info">
                        <!-- <i class="fa-duotone fa-otter"></i> -->
                        <div class="card-info-title">
                            <h3>Pathanjali Boys Hostel</h3>
                            <!-- <h4>Look at me, imma cute lil fella.</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" onclick="location.href='AddRating/home.php?id=10'">
            <div class="card-content" style="background-color:coral;">
                <!-- <div class="card-image">
                <i class="fa-duotone fa-otter"></i>
              </div> -->
                <div class="card-info-wrapper">
                    <div class="card-info">
                        <!-- <i class="fa-duotone fa-otter"></i> -->
                        <div class="card-info-title">
                            <h3>Residential PU College</h3>
                            <!-- <h4>Look at me, imma cute lil fella.</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" onclick="location.href='AddRating/home.php?id=11'">
            <div class="card-content" style="background-color:coral;">
                <!-- <div class="card-image">
                <i class="fa-duotone fa-otter"></i>
              </div> -->
                <div class="card-info-wrapper">
                    <div class="card-info">
                        <!-- <i class="fa-duotone fa-otter"></i> -->
                        <div class="card-info-title">
                            <h3>Prakruthi Girls Hostel</h3>
                            <!-- <h4>Look at me, imma cute lil fella.</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" onclick="location.href='AddRating/home.php?id=12'">
            <div class="card-content" style="background-color:coral;">
                <!-- <div class="card-image">
                <i class="fa-duotone fa-otter"></i>
              </div> -->
                <div class="card-info-wrapper">
                    <div class="card-info">
                        <!-- <i class="fa-duotone fa-otter"></i> -->
                        <div class="card-info-title">
                            <h3>Manjusha Boys Hostel</h3>
                            <!-- <h4>Look at me, imma cute lil fella.</h4> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>


</body>



</html>