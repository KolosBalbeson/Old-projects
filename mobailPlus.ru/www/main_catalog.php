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

		$catalog = mysqli_query($connect, "SELECT id,name,imager FROM `tovars` ORDER BY id DESC ");
		$sortMenu = mysqli_query($connect, "SELECT id,producer FROM `tovars`");
	?>
	<!-- Header -->
	<?php include_once ('body/header.html');?>
	<!-- Menu/Sort-menu -->
	<?php include_once ('body/sortMenu.php');?>
	<!-- Sort-menu/Content -->
	<section>
		<div class="content">
			<div class="container">
				<div class="container-tovar">
					<h1>Популярные товары</h1>
					<div class="box-tovar">

						<div class="box-catalog">
							<?php
								while( $row = mysqli_fetch_array($catalog) )
								{
							?>
							<div class="tovar" id="<?php echo $row['id'];?>">
								<div class="imager-tovar">
									<img src="imager/tovar/<?php echo $row['imager'];?>" alt="<?php echo $row['name'];?>">
								</div>
								<div class="name-tovar">
									<div>
										<?php echo $row['name'];?>
									</div>
								</div>
								<div class="butt-sell">
									<a href="tovar.php?id=<?php echo $row['id']; ?>">Подробнее</a>
								</div>
							</div>
							<?php
								}
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