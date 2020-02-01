<?php

$localhost = "localhost";
$user = "root";
$passwd = "";
$bd = "bd1";

$connect = mysqli_connect($host, $user, $passwd, $bd);
$GlobalCategory = array("Чехлы для телефонов", "Чехлы для планшетов", "Аксессуары");


mysqli_query($connect, "SET NAMES UTF8");

 if(!$connect)
	{
		echo "Не удалось подключиться к базе данных!<br>";
		exit(mysqli_error());
	}
