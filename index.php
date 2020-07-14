<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<div class="search_box">
		<center>
		<form action="" method="POST">
			Search : <input type="search" class="search_class" required="" name="srch" placeholder="Search by Product name">
			<input type="submit" name="btn" class="search_btn_class" value="Search">
		</form>
	</center>
	</div>
	<?php
	if (isset($_POST['btn'])) {
		$si = htmlentities($_POST['srch']);
		if ($si== "") {
			echo "<p style='margin:0 auto; width:70%;background-color:red; color:white;'>Search Field is empty!!</p>";
		}else{
			echo "<h2>You have searched for: '".$si."'</h2>";
		}
	}
	?>
<div class="conatiner_index">
		<center><img src="nav_1.png" class="nav_1_img" width="99%" height="450px"></center>
		<div class="details_index">
			<br>
			<h2>Products</h2><br>
			We suppy products for sell good price. We have good quality and quantity.<br>
			We try to sell recent and new products. There are many products we have in our stock. Such as Shirt, Pants, Jins and etc items.<br>
			Here some example product of our store.<br><br>
		</div>
		<div class="main_box">
			<div class="box">
				<center><img src="media/1.jpg" width="95%" height="70%"></center><br>
				<h2><center>Ear Ring<br>
				250 TK</h2><br>
				<button class="wiishl_btn">Wish List</button> <button class="cartd_btn">Add Cart</button></center>
			</div>
			<div class="box">
				<center><img src="media/2.jpg" width="95%" height="70%"></center><br>
				<h2><center>Ear Ring<br>
				250 TK</h2><br>
				<button class="wiishl_btn">Wish List</button> <button class="cartd_btn">Add Cart</button></center>

			</div>
			<div class="box">
				<center><img src="media/3.jpg" width="95%" height="70%"></center><br>
				<h2><center>Ear Ring<br>
				250 TK</h2><br>
				<button class="wiishl_btn">Wish List</button> <button class="cartd_btn">Add Cart</button></center>

			</div>
		</div>
	</div>
	<?php
	include 'footer.php';
	?>
</body>
</html>