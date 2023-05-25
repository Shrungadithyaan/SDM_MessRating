<?php
session_start();
include "../conn.php";
// $user = $_SESSION[''];
// $user_id = $_SESSION[''];
// $_SESSION['name'] = 'darshan';

// $hostel_id = 1;
// $category = 'Breakfast';



if (!isset($_SESSION['id'])) {
?>
    <script>
        window.location.href = "../index.php";
    </script>
<?php
}

?>



<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            font-family: cursive;
        }

        .menu {
            display:flex;
            /* float:center; */
            /* grid-template-columns:repeat(auto-fit,minmax(150px,1fr)); */
            height: 200px;
            /* gap:70px; */
           justify-content:center;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 215px;
            height: auto;
            text-align: center;
            border: 1px solid black;
            border-radius: 10px;
            display: inline-block;
            margin: 5px;
            /* padding:10px; */
            box-shadow: 5px 10px 18px #888888;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container1 {
            /* padding: 2px 16px; */
            padding: 5px;

            display: block;
            justify-content: center;
        }


        .button-33 {
            background-color: #c2fbd7;
            border-radius: 10px;
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
            font-family: cursive;
        }

        .button-33:hover {
            box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
            transform: scale(1.05) rotate(-1deg);
        }
        .back{
            margin-left:-20px; 
            margin-top:-20px;
            position: fixed;
        }
        .nodata{
            margin-top:8%;
            margin-left:15%;
            height:70%;
            width:70%;
        }

        @media screen and (max-width:480px) {
            .card {
                /* display: block; */
                width: 200px;
                height: 190px;

            }

            .menu {
                display: block;
            }

            .card__header {
                margin-bottom: 5px;
            }

            .nodata{
            margin-top:50%;
            margin-left:3%;
            height:50%;
            width:100%;
        }
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="../css/u_card.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <title>MessRating</title>
    <link rel="icon" href="../images/sdm_logo.png" type="image/x-icon">
</head>

<body style="display:block;max-width:100%;">
<div class="back">
    <a href="home.php"><i class='fas fa-reply-all'style='font-size:30px;color:black'></i></a>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script>
        
        $(function() {
            $(".rateyo").rateYo().on("rateyo.change", function(e, data) {
                var rating = data.rating;
                $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
                $(this).parent().find('.result').text('rating :' + rating);
                $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
            });
        });
    </script>
</body>



<?php
// $sql = "select * from  food  where hostel_id='.$_SESSION[hostel_id].' and category='$category' and status='1'";
$_SESSION['cal'] = $_GET['value'];
$day = date('l');
// echo $day;
$sql = "SELECT * FROM menu where hostel_id='{$_SESSION['hostel_id']}' and category='{$_SESSION['cal']}' and `day`='$day'";
// echo $sql;
$result = $db->query($sql);
if($result->num_rows == 0) {
    ?>
    <img src="../images/Nodata.png" class="nodata"></img>
    <?php
}
if ($result->num_rows > 0) {
    // output data of each row
    // $foodid = array();
    // $ratings = array();
?>

    <div align="center" class="menu">
        <?php
        while ($row = $result->fetch_assoc()) {
            // $_SESSION['f_id'] = $row['food_id'];
        ?>
            <!-- <div class="grid"> -->
            <form action="add_ratings.php" method="post" style="height:200px">
                <div class="">
                    <div class="card" style="border-radius:15px;">
                        <!-- <img class="card__img" src="https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2250&amp;q=80" alt="Snowy Mountains"> -->
                        <div class="card__content" style="padding:20px;">
                            <h1 class="card__header"><?php echo $row["item"]; ?></h1>
                            <!-- <p class="card__text">Look up at the night sky, and find yourself </p> -->
                            <div class="rateyo" id="rating" data-rateyo-rating="4" data-rateyo-num-stars="5" data-rateyo-score="3"></div>
                            <span class='result' style="font-weight:bold;font-size:14px;"></span>
                            <input type="hidden" name="rating" required /><br>
                            <input type="hidden" name="foodid" value="<?php echo $row['food_id'] ?>" />
                            <input type="hidden" name="cookid" value="<?php echo $row['cook_id'] ?>" />
                            <button class="button-33" type="submit">Submit</button>
                        </div>
                    </div>
                </div>

            </form>

        <?php
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