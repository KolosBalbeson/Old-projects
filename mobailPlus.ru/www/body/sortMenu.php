<?php
		require_once('config/connect.php');
		$sortMenuT = mysqli_query($connect, "SELECT id,producer,category FROM `tovars` WHERE category=0");
		$sortMenuP = mysqli_query($connect, "SELECT id,producer,category FROM `tovars` WHERE category=1");
		$sortMenuO = mysqli_query($connect, "SELECT id,producer,category FROM `tovars` WHERE category=2");
?>
	<div class="sort-menu">
		<div class="sort-box">
			<h4>Чехлы для телефонов</h4>
			<div class="menu-sort-box">
				<div class="inner-sort-box">
					<ul class="menu-box-link">
						<?php while( $row = mysqli_fetch_array($sortMenuT) ){?>
						<li><a href="catalog.php?category=<?php echo $row['category'];?>&producer=<?php echo $row['producer'];?>"><?php echo $row['producer']; ?></a></li>
						<?php }?>
					</ul>
					<ul class="menu-box-link">
					</ul>
				</div>
			</div>
		</div>
		<div class="sort-box">
			<h4>Чехлы для планшетов</h4>
			<div class="menu-sort-box">
				<div class="inner-sort-box">
					<ul class="menu-box-link">
						<?php while( $row = mysqli_fetch_array($sortMenuP) ){?>
						<li><a href="catalog.php?category=<?php echo $row['category'];?>&producer=<?php echo $row['producer'];?>"><?php echo $row['producer']; ?></a></li>
						<?php }?>
					</ul>
					<ul class="menu-box-link">
					</ul>
				</div>
			</div>
		</div>
		<div class="sort-box">
			<h4>Аксессуары</h4>
			<div class="menu-sort-box">
				<div class="inner-sort-box">
					<ul class="menu-box-link">
						<?php while( $row = mysqli_fetch_array($sortMenuO) ){?>
						<li><a href="catalog.php?category=<?php echo $row['category'];?>&producer=<?php echo $row['producer'];?>"><?php echo $row['producer']; ?></a></li>
						<?php }?>
					</ul>
					<ul class="menu-box-link">
					</ul>
				</div>
			</div>
		</div>
	</div>