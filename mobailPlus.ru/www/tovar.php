<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Author" content="Авторы: ">
	<title>Мобаил Плюс</title>
	<!-- Logotip -->
	<link rel="shortcut icon" href="imager/logotip.ico" type="image/x-icon">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- Style -->
	<link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="style/home.css">
	<link rel="stylesheet" href="style/sort-menu.css">
</head>
<body>
	<?php
		require_once('config/connect.php');
		if(isset($_GET['id'])) {
			$id = $_GET['id'];
		}

		$tovar = mysqli_query($connect, " SELECT * FROM `tovars` WHERE tovars.id = '$id' ");
		$row = mysqli_fetch_array($tovar);
	?>
	<!-- Header -->
	<?php include_once ('body/header.html');?>
	<!-- Menu/Sort-menu -->
	<?php include_once ('body/sortMenu.php');?>
	<!-- Sort-menu/Content -->
	<section>
		<div class="content">
			<div class="container">
				<?php echo $row['id'];?> <br>
				<?php echo $row['name'];?> <br>
				<?php echo $row['producer'];?> <br>
				<?php echo $row['imager'];?> <br>
				<?php echo $row['text'];?> <br>
				<?php echo $row['category'];?> <br>
				<?php echo $row['price'];?> <br> <br>
							<?php
								mysqli_close($connect);
							?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Content/Footer -->
	<?php include_once ('body/footer.html');?>
	<!-- Footer -->
	<!-- Point -->
	<div class="arrow">
		<a href="#"><img src="imager/icon/arrow.png" alt="Point"></a>
	</div>
	<script>

	</script>
</body>
</html>