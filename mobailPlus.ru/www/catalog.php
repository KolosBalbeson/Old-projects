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
	<link rel="stylesheet" href="style/catalog-style.css">
</head>
<body>
	<?php
		require_once('config/connect.php');

									// Сортировка По..
									$cat1 = mysqli_query($connect, "SELECT id,name,imager FROM `tovars` ORDER BY id ASC ");
									$cat2 = mysqli_query($connect, "SELECT id,name,imager FROM `tovars` ORDER BY id DESC ");
									$cat3 = mysqli_query($connect, "SELECT id,name,imager FROM `tovars` ORDER BY name ASC ");

		// Если приходит категория и производитель
		if(isset($_GET['category']) and isset($_GET['producer']))  {

			$category = $_GET['category'];
			$producer = $_GET['producer'];

			$catalogs = mysqli_query($connect, " SELECT id,category,producer,name,imager,price FROM `tovars` WHERE tovars.category='$category' AND tovars.producer = '$producer' ");
			$sortMenu = mysqli_query($connect, "SELECT id,producer,category FROM `tovars` WHERE tovars.category = '$category'");

			// Категория телефонов
			if ($category == 0) {
				$s = $GlobalCategory[0];
			}
			// Категория планшетов
			elseif($category == 1)
			{
				$s = $GlobalCategory[1];
			}
			// Категория аксессуаров
			elseif($category == 2)
			{
				$s = $GlobalCategory[2];
			}
		}
		// Если приходит только категория
		elseif (isset($_GET['category'])) {

			$category = $_GET['category'];

			$catalogs = mysqli_query($connect, " SELECT id,category,producer,name,imager,price FROM `tovars` WHERE tovars.category='$category'");
			$sortMenu = mysqli_query($connect, "SELECT id,producer,category FROM `tovars` WHERE tovars.category = '$category'");

			$innerSortMenu = mysqli_query($connect, "SELECT id,producer,category FROM `tovars` WHERE tovars.category = '$category'");

			// Категория телефонов
			if ($category == 0) {
				$s = $GlobalCategory[0];
			}
			// Категория планшетов
			elseif($category == 1)
			{
				$s = $GlobalCategory[1];
			}
			// Категория аксессуаров
			elseif($category == 2)
			{
				$s = $GlobalCategory[2];
			}
		}
		// Если запрос не прошёл или другая проблема
		elseif ( $a != $b ){
			echo "<h1>Ошибка! Такой страницы нет!</h1>";
			echo "<a href='../'>Вернуться обратно</a>";
		}

	?>
	<!-- Header -->
	<?php include_once ('body/header.html');?>
	<!-- Menu/Sort-menu -->
	<?php include_once ('body/sortMenu.php');?>
	<!-- Sort-menu/Content -->
	<section>
		<div class="inner-sort-menu">
			<p><a href="main_catalog.php">Каталог</a> > <a href="catalog.php?category=<?php echo $category;?>"><?php echo $s;?></a> > <a href="catalog.php?category=<?php echo $category;?>&producer=<?php echo $producer;?>"><?php echo $producer;?></a></p>
		</div>
		<div class="content">
			<div class="container-catalog">
				<div class="catalog">
					<div class="sidebar">
						<div class="inner-sidebar">
							<?php while( $row = mysqli_fetch_array($sortMenu) )
							{
							?>
							<p><a href="catalog.php?category=<?php echo $row['category'];?>&producer=<?php echo $row['producer'];?>"><?php echo $row['producer']?></a></p>
							<?php
							}
							?>
						</div>
					</div>
					<div class="main-box">
						<div class="sort-category">
							<select name="sortz" class="sortz">
								<option value='1'>Сортировать: по возрастанию</option>
								<option value='2'>Сортировать: по убыванию</option>
								<option value='3'>Сортировать: по популярности</option>
							</select>
						</div>
						<?php while ( $row = mysqli_fetch_array($catalogs) )
							{
							?>
						<div class="main-sell" id="<?php echo $row['id'];?>">
							<div class="imager-t">
								<img src="imager/catalog/<?php echo $row['imager'];?>" alt="<?php echo $row['name'];?>">
							</div>
							<div class="title-t">
								<?php echo $row['name'];?>
							</div>
							<div class="price-t"><?php echo $row['price'];?> ₽</div>
							<div class="butt-catalog">
								<a href="tovar.php?id=<?php echo $row['id'];?>">Купить</a>
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