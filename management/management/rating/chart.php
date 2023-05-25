<?php session_start();
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
<header>
	<title>MessRating</title>
	<link rel="icon" href="../../../images/sdm_logo.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
		.fancy {
			width: 400px;
			height: 400px;
			margin-top: 10%;
			box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
			/* margin-left: 500px;
			margin-top: 100px; */
			/* display: flex;
			flex-direction: row;
			align-items: center; */

		}

		.chart_edit {
			margin-top: 30px;
			height: 400px;
			width: 400px;
			padding-top: 80px;
		}

		.font_des {
			padding-top: 10%;
			font-family: cursive;
			color: #5aeb8fdf;
			font-size: 30px;
			text-align: center;

		}

		@media only screen and (max-width: 400px) {
			.fancy {
				width: auto;
				height: auto;
				box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
				margin-left: -10px;
				margin-top: 100px;

			}

			.chart_edit {
				margin-top: 50px;
				padding-top: 60px;
				height: auto;
				width: auto;

			}

			.font_des {
				padding-top: 50px;
				font-family: cursive;
				color: #5aeb8fdf;
				font-size: 20px;
				text-align: center;
			}
		}

		/* //nav bar
     */
		.dropdown-menu {
			text-align: center;
		}

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

</header>
<div class="back-button">
	<a href="index.php" onclick="history.back(); return false;">
		Back </a>
</div>
<h2 align="center" style="font-family:sans-serif; margin-top:60;margin-bottom:-150px">Hostel Name : <?php echo $_SESSION['hostel_name_display'] ?></h2>
<?php
// session_start();


include('../../../conn.php');





if (!isset($_SESSION['id'])) {
?>
	<script>
		window.location.href = "../../../index.php";
	</script>
<?php
}


$food_id = $_GET['food_id'];
$rate_one = 1;
$rate_two = 2;
$rate_three = 3;
$rate_four = 4;
$rate_five = 5;



$sql_one = "SELECT COUNT(rating) AS one_avg FROM rating WHERE rating = $rate_one AND food_id = $food_id	";
$result_one = mysqli_query($db, $sql_one);

if ($result_one === FALSE) {
	die(mysqli_error($db));
}

$row_one = mysqli_fetch_assoc($result_one);


$sql_two = "SELECT COUNT(rating) AS one_avg FROM rating WHERE rating = $rate_two AND food_id = $food_id	";
$result_two = mysqli_query($db, $sql_two);

if ($result_two === FALSE) {
	die(mysqli_error($db));
}

$row_two = mysqli_fetch_assoc($result_two);

$sql_three = "SELECT COUNT(rating) AS one_avg FROM rating WHERE rating = $rate_three AND food_id = $food_id	";
$result_three = mysqli_query($db, $sql_three);

if ($result_three === FALSE) {
	die(mysqli_error($db));
}

$row_three = mysqli_fetch_assoc($result_three);

$sql_four = "SELECT COUNT(rating) AS one_avg FROM rating WHERE rating = $rate_four AND food_id = $food_id	";
$result_four = mysqli_query($db, $sql_four);

if ($result_four === FALSE) {
	die(mysqli_error($db));
}

$row_four = mysqli_fetch_assoc($result_four);

$sql_five = "SELECT COUNT(rating) AS one_avg FROM rating WHERE rating = $rate_five AND food_id = $food_id	";
$result_five = mysqli_query($db, $sql_five);

if ($result_five === FALSE) {
	die(mysqli_error($db));
}


$row_five = mysqli_fetch_assoc($result_five);


$dataPoints = array(
	array("label" => "Rating-1", "y" => $row_one['one_avg']),
	array("label" => "Rating-2", "y" => $row_two['one_avg']),
	array("label" => "Rating-3", "y" => $row_three['one_avg']),
	array("label" => "Rating-4", "y" => $row_four['one_avg']),
	array("label" => "Rating-5", "y" => $row_five['one_avg'])
) ?>

<!DOCTYPE HTML>
<html>

<head>

	<script>
		window.onload = function() {


			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
				height: 240,
				data: [{
					type: "pie",
					yValueFormatString: "#,##0.00\"%\"",
					indexLabel: "{label} ({y})",
					dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
				}]
			});
			chart.render();

		}
	</script>
</head>

<body>


	<center>
		<?php
		$query = "SELECT * FROM rating WHERE food_id=$food_id";
		$statement = $db->prepare($query);


		$result = mysqli_query($db, $query);

		if ($result === FALSE) {
			die(mysqli_error($db));
		}

		// $row = mysqli_fetch_assoc($result);




		// $statement->execute();
		// $result = $statement->fetchAll();
		$number_of_rows = mysqli_num_rows($result);
		if ($number_of_rows > 0) {
		?>
			<div class="fancy">

				<h2 class="font_des error" style="padding-top:-75px;font-family:Raleway, sans-serif;" id="chart">Graphical Analysis</h2>

				<!-- <h4> NO DATA FOUND </h4> -->
				<div id="chartContainer" class="pie chart_edit"></div>
				<!-- <div><p style="position:absolute;float:center;top:450px;left:700px;color:lightgrey"> no data found</p></div> -->


			</div>
		<?php
		} else {
		?>
			<h1 style="margin-top:300px">No data found</h1>
		<?php
		}
		?>
	</center>

	<script>
		function confirmation() {
			let text = "Are you sure you want to delete the data.";
			if (confirm(text) == true) {
				window.location.href = "../deleteRecord.php?name='button1'";
			} else {

			}
		}
	</script>

	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script src="../../js/jquery.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/smoothscroll.js"></script>
	<script src="../../js/jquery.nav.js"></script>
	<script src="../../js/isotope.js"></script>
	<script src="../../js/imagesloaded.min.js"></script>
	<script src="../../js/custom.js"></script>
</body>

<!-- </html> -->