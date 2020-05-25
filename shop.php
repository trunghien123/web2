<!DOCTYPE html>
<html lang="en">

<head>
	<title>PizzaHot - Shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">



</head>

<body class="goto-here">
	<?php
	include('modules/header.php');
	include('modules/content/title.php'); //tieu de & hinh nen tieu de
	$sql = "SELECT * FROM loaisanpham ORDER BY MACL";
	$result = DataProvider::executeQuery($sql);
	?>
	<section class="ftco-section">

		<div class="container">
			<div style="padding: 20px">
				<table>
					<tr>
						<td>Phân loại : </td>
						<td>
							<select id="categories" style="padding: 5px; width: 200px" >
								<option value="" selected>Tìm theo danh mục</option>
								<?php
								while ($row = mysqli_fetch_assoc($result)) { ?>
									<option value="<?php echo $row['MACL']; ?>"><?php echo $row['TENCL']; ?></option>
								<?php
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Giá từ : </td>
						<td><input type="text" name="" id="" style="border-radius: 5px"></td>
					</tr>
					<tr>
						<td>Giá đến : </td>
						<td><input type="text" name="" id="" style="border-radius: 5px"></td>
					</tr>
				</table>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10 mb-5 text-center">
					<ul class="product-category">
						<li><a href="shop.php" class="active" id="all">Tất cả</a></li>
						<?php
						$categoryGet = isset($_GET['category']) ? $_GET['category'] : null;
						$result = DataProvider::executeQuery("SELECT * FROM loaisanpham");
						while ($row = mysqli_fetch_assoc($result)) {
							$category = $row['TENCL'];
							$categoryId = $row['MACL'];
						?>
							<li><a id="<?php echo $categoryId; ?>" href="shop.php?category=<?php echo $categoryId; ?>"><?php echo $category; ?></a></li>

						<?php
						}
						?>
					</ul>
				</div>
			</div>
			<div id="data">
			
			</div>
			
			
		</div>
	</section>

	<?php include('modules/content/subcribe.php'); ?>

	<?php include('modules/footer.php'); ?>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>
	<script src="js/ajax.js"></script>
	<script type="text/javascript" charset="utf-8">
		var categorySelect = "<?php echo $category; ?>" != "" ? "<?php echo $category; ?>" : "all";
		$(document).ready(function() {
			$('li a').removeClass('active');
			$("li a#" + categorySelect + "").addClass('active');
		});

		$('.nav-item-shop').addClass('active');
	</script>


</body>

</html>
<style>
	.img-fluid {
		max-width: 100%;
		max-height: 170px;
	}
</style>