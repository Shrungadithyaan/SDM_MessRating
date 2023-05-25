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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MessRating</title>
    <link rel="icon" href="../images/sdm_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/check-box.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <style>
        .main {
            
        }

        select {
            height: 30px;
            width: 120px;
            -webkit-appearance: none;
            padding-left: 5px;
        }

        @media screen and (max-width:400px) {
            .main {
                display: inline;
            }
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
        .back{
            margin-top:10px;
            width:200px;
        }
        @media screen and  (max-width:480px){
            .back{
            /* margin-left:-280px; 
            margin-top:-600px;
            position: fixed; */
        }
        }
        
    </style>
</head>

<body>
   
    <form action="addmenu_item.php" method="post">
        <fieldset class="checkbox-group">
            <legend class="checkbox-group-legend">Choose Menu</legend>
            <select name="day" class="button-30" style="width:150px;height:40px" required>
                <option value="" hidden>Select day</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select>
            <select name="cook" class="button-30" style="width:150px;height:40px" required>
                <option value="" hidden>Select Cook</option>

                <?php
                $sql = "select * from  cook  where hostel_id='{$_SESSION['hostel_id']}'";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <option value='<?php echo $row['cook_id'] ?>'><?php echo $row['cook_name'] ?></option>
                <?php
                    }
                }
                ?>
            </select>
            <?php
            $category = $_GET['menu'];
            $sql = "select * from  food  where hostel_id='{$_SESSION['hostel_id']}' and category='$category'";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
            ?>

                <input type="hidden" name="category" value="<?php echo $category; ?>" />
                <div align="center" class="main">
                    <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <div class="checkbox" style="margin:5px;">
                            <label class="checkbox-wrapper">
                                <input type="checkbox" class="checkbox-input" name="check[]" value="<?php echo $row["food_id"]; ?>" />

                                <span class="checkbox-tile" style="width:100px;min-height:100px;">
                                    <span class="checkbox-icon">
                                        <rect width="256" height="256" fill="none"></rect>
                                        <circle cx="96" cy="144.00002" r="10"></circle>
                                        <circle cx="160" cy="144.00002" r="10"></circle>
                                        <path d="M74.4017,80A175.32467,175.32467,0,0,1,128,72a175.32507,175.32507,0,0,1,53.59754,7.99971" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></path>
                                        <path d="M181.59717,176.00041A175.32523,175.32523,0,0,1,128,184a175.32505,175.32505,0,0,1-53.59753-7.99971" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></path>
                                        <path d="M155.04392,182.08789l12.02517,24.05047a7.96793,7.96793,0,0,0,8.99115,4.20919c24.53876-5.99927,45.69294-16.45908,61.10024-29.85086a8.05225,8.05225,0,0,0,2.47192-8.38971L205.65855,58.86074a8.02121,8.02121,0,0,0-4.62655-5.10908,175.85294,175.85294,0,0,0-29.66452-9.18289,8.01781,8.01781,0,0,0-9.31925,5.28642l-7.97318,23.91964" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></path>
                                        <path d="M100.95624,182.08757l-12.02532,24.0508a7.96794,7.96794,0,0,1-8.99115,4.20918c-24.53866-5.99924-45.69277-16.459-61.10006-29.85069a8.05224,8.05224,0,0,1-2.47193-8.38972L50.34158,58.8607a8.0212,8.0212,0,0,1,4.62655-5.1091,175.85349,175.85349,0,0,1,29.66439-9.18283,8.0178,8.0178,0,0,1,9.31924,5.28642l7.97318,23.91964" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12"></path>
                                        </svg>
                                    </span>
                                    <span class="checkbox-label"><b><?php echo $row["food_item"]; ?></b></span>
                                </span>
                                <input type="hidden" name="food[]" value="<?php echo $row["food_item"]; ?>" />
                            </label>

                        </div>
                        <!--  -->
                <?php
                    }
                } else {
                    echo "0 results";
                }

                ?>
        </fieldset>
        <div align="center">
            <input type="submit" class="button-33" style="margin-top:20px;width:200px;margin-right:10px;" />
            <button class="button-33 back" onclick="history.back()">Back</button>
        </div>
    </form>
</body>

</html>