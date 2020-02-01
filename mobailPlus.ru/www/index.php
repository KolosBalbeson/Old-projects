<?php
	header('Content-type: text/html; charset=utf-8');
	require_once('config/connect.php');
	$thelefon = mysqli_query($connect, " SELECT * FROM `tovars` WHERE category = 0 LIMIT 4");

	$planshet = mysqli_query($connect, " SELECT * FROM `tovars` WHERE category = 1 LIMIT 4");

	$other = mysqli_query($connect, " SELECT * FROM `tovars` WHERE category = 2 LIMIT 4");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
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
	<script src="script/jq/jquery-3.2.1.min.js"></script>
</head>
<body>
	<?php include_once ('body/header.html');?>
	<!-- Menu/Content -->
	<section>
		<div class="slider">
			<div class="container">
				<div class="inner-slider">
					<div class="back-arrow"></div>
					<div class="slide">
						<div class="text-sl">
							<h3>Чехлы, накладки, бампера</h3>
							<p>Чехлы на любой цвет и вкус</p>
						</div>
						<div class="imager-sl">
							<img src="imager/slider/banner2.png" alt="Banner">
						</div>
					</div>
					<div class="next-arrow"></div>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="container">
				<div class="container-tovar">
					<h1>Чехлы для телефонов</h1>
					<div class="box-tovar" id="<?php echo $row['id'];?>">
					<?php
					while( $row = mysqli_fetch_array($thelefon) )
						{ ?>
						<div class="tovar" title="<?php echo $row['name']; ?>">
							<div class="imager-tovar">
								<img src="imager/tovar/<?php echo $row['imager']; ?>" alt="<?php echo $row['name']; ?>">
							</div>
							<div class="name-tovar">
								<div>
									<?php echo $row['name']; ?>
								</div>
							</div>
							<div class="butt-sell">
								<a href="#">Подробнее</a>
							</div>
						</div>
					<?php
						}
					?>
					</div>
				</div>
				<div class="container-tovar">
					<h1>Чехлы для планшетов</h1>
					<div class="box-tovar">
					<?php
					while( $row = mysqli_fetch_array($planshet) )
						{ ?>
						<div class="tovar" title="<?php echo $row['name']; ?>">
							<div class="imager-tovar">
								<img src="imager/tovar/<?php echo $row['imager']; ?>" alt="<?php echo $row['name']; ?>">
							</div>
							<div class="name-tovar">
								<div>
									<?php echo $row['name']; ?>
								</div>
							</div>
							<div class="butt-sell">
								<a href="#">Подробнее</a>
							</div>
						</div>
					<?php
						}
					?>
					</div>
				</div>
				<div class="container-tovar">
					<h1>Аксессуары</h1>
					<div class="box-tovar">
					<?php
					while( $row = mysqli_fetch_array($other) )
						{ ?>
						<div class="tovar" title="<?php echo $row['name']; ?>">
							<div class="imager-tovar">
								<img src="imager/tovar/<?php echo $row['imager']; ?>" alt="<?php echo $row['name']; ?>">
							</div>
							<div class="name-tovar">
								<div>
									<?php echo $row['name']; ?>
								</div>
							</div>
							<div class="butt-sell">
								<a href="#">Подробнее</a>
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
		<div class="repairs">
			<div class="container">
				<div class="inner-repairs">
					<div class="imager-repairs">
						<img src="imager/repairs/11.jpg" alt="Repairs">
					</div>
					<div class="text-repairs">
						<h2>Сломался гаджет?</h2>
						<p>
							Мы предлагаем быстрый, а главное качественный ремот мобильных устройств.
							На всю работу и запчасти предоставляется гарантия 1 год.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="maps" id="contacts">
		<div class="container">
			<div class="inner-maps">
				<div class="inform-location">
					<div class="inform-box">
						<div class="i-b">
							<ul>
								<li>Телефон: </li>
								<li>E-mail: </li>
								<li>Адрес: </li>
								<li>Режим работы: </li>
							</ul>
						</div>
						<div class="i-b">
							<ul>
								<li>
									<span>
										+7(953) 953 80 17
									</span>
									<span>
										+7(48741) 6 32 94
									</span>
								</li>
								<li>
									<span>akil72@mail.ru</span>
								</li>
								<li>
									<span>г.Ефремов ул. Мира, 2Б, ул. Горького, 28А</span>
								</li>
								<li>
									<span>Ежедневно 9:00 - 19:00</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="slider-location">
					<div class="box-s-l">
						<div class="left-sliderMap"></div>
						<img id="maping" src="imager/maps/map1.jpg" alt="map">
						<div class="right-sliderMap"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include_once ('body/footer.html');?>
	<!-- Point -->
	<div class="arrow">
		<a href="#"><img src="imager/icon/arrow.png" alt="Point"></a>
	</div>
	<script src="script/slider.js"></script>
</body>
</html>