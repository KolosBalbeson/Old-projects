<?php

	require_once('config/connect.php');
	$thelefon = mysqli_query($connect, " SELECT * FROM `tovars` WHERE category = 1 ");

	$planshet = mysqli_query($connect, " SELECT * FROM `tovars` WHERE category = 2 ");

	$other = mysqli_query($connect, " SELECT * FROM `tovars` WHERE category = 0 ");

	$catalog = mysqli_query($connect, "SELECT * FROM `tovars` ORDER BY id ");
	$catalog1 = mysqli_query($connect, "SELECT * FROM `tovars` ORDER BY id ");

	$topTovars = mysqli_query($connect, "SELECT id,imager,name,gekauft FROM `tovars` WHERE gekauft > 0 ORDER BY gekauft LIMIT 3 ");

	$topsort = mysqli_query($connect, "SELECT * FROM `tovars` WHERE name = 'Силиконовый чехол' ");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<?
			$str = "Hello Wordl!"; // 12
			$srt = mb_strlen($str,"utf-8");
			echo strlen($str);
			echo "<br>";

			echo "<h1>Популярыне товары</h1>";
		while($row = mysqli_fetch_array($topsort)){
			echo $row['id']."<br>";
			echo $row['imager']."<br>";
			echo $row['name']."…"."<br>";
			echo "<hr>";
		}
			echo "<---------------->";
			echo "<br>";
			echo "<---------------->";
			echo "<br>";

		while($row = mysqli_fetch_array($thelefon)){
			echo $row['id']." DDD "."<br>";
			echo $row['category']."<br>";
			echo $row['imager']."<br>";
			$srt = mb_strlen($row['name'],"utf-8");
			if ($srt <= 17199) {
				echo $row['name']."<br>";
				echo $srt;
				if ($srt > 17199){
					$row['name'] = substr($row['name'], 0, 34);
					$row['name'] = rtrim($row['name'], "!,.-");
					$row['name'] = substr($row['name'], 0, strrpos($row['name'], ' '));
					echo $row['name']."…"."<br>";
				}
			}
			echo $row['price']."<br>";
			echo "<hr>";
		}
			echo "<hr>";
			echo "<hr>";

		while($row = mysqli_fetch_array($planshet)){
			echo $row['id']."<br>";
			echo $row['category']."<br>";
			echo $row['imager']."<br>";
			echo $row['name']."…"."<br>";
			echo $row['price']."<br>";
			echo "<hr>";
		}
			echo "<hr>";
			echo "<hr>";

		while($row = mysqli_fetch_array($other)){
			echo $row['id']."<br>";
			echo $row['category']."<br>";
			echo $row['imager']."<br>";
			echo $row['name']."…"."<br>";
			echo $row['price']."<br>";
			echo "<hr>";
		}
			echo "<hr>";
			echo "--DDDDDDDDDDDDDDDD--";
			echo "<br>";
			echo "---DDDDDDD111DDDDDDD---";
			echo "<hr>";

		while($row = mysqli_fetch_array($catalog1)){
			echo "id - ".$row['id']."<br>";
			echo "category - ".$row['category']."<br>";
			echo "imager - ".$row['imager']."<br>";
			$srt = mb_strlen($row['name'],"utf-8");
			if ($srt <= 17199) {
				echo "name - ".$row['name']."<br>";
				if ($srt > 17200){
					$row['name'] = substr($row['name'], 0, 34);
					$row['name'] = rtrim($row['name'], "!,.-");
					$row['name'] = substr($row['name'], 0, strrpos($row['name'], ' '));
					echo "name - ".$row['name']."…"."<br>";
				}
			}
			echo "prive - ".$row['price']." руб."."<br>";
			echo "<hr>";
		}
			echo "<hr>";
			echo "-------222222------";
			echo "<br>";
			echo "------------------------";
			echo "<br>";
			echo "------------------------";
			echo "<hr>";

		while($row = mysqli_fetch_array($catalog)){
			echo "id - ".$row['id']."<br>";
			echo "category - ".$row['category']."<br>";
			echo "imager - ".$row['imager']."<br>";
			$srt = mb_strlen($row['name'],"utf-8");
			if ($srt <= 17199) {
				echo "name - ".$row['name']."<br>";
				echo $srt;
				if ($srt > 17200){
					$row['name'] = substr($row['name'], 0, 34);
					$row['name'] = rtrim($row['name'], "!,.-");
					$row['name'] = substr($row['name'], 0, strrpos($row['name'], ' '));
					echo "name - ".$row['name']."…"."<br>";
				}
			}
			echo "prive - ".$row['price']." руб."."<br>";
			echo "<hr>";
		}
						mysqli_close($connect);

	?>
</body>
</html>