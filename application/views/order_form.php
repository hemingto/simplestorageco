<html>

<?php
	require 'partials/html_head.php';
?>
<head>
	<title>Add Order | Simple Storage Co.</title>
	<link rel="stylesheet" type="text/css" href="assets/css/add_customer.css">
	<link rel="stylesheet" type="text/css" href="assets/css/add_order.css">
</head>

<img src="assets/img/ss_logo.png" alt="logo" id="logo">

<div id="top_bar" class="gradient">
	<h1>Order</h1>
</div>

<body>

<div class="center">

	<div class="block small_icon_div">
		<img src="assets/img/small_customer_icon.png" alt="Customer icon" class="small_icon current">
		<img src="assets/img/small_money_icon.png" alt="Customer icon" class="small_icon opacity">
		<img src="assets/img/small_camera_icon.png" alt="Customer icon" class="small_icon camera_icon opacity">
	</div>

	<div class="small_container">
		
		<form class="inline" action="processorder" method="post">
			<div class="inline half top">
				<input type='text' name='order_description' value="Small" class="order_des" readonly>
				<p class="order_context">(Walk-In Closet)</p>
				<input type='text' name='square_feet' value="5'x5'" class="small_font small_input" readonly>
				<input type='text' name='cubic_feet' value="100 cbft" class="small_font small_input" readonly>
				<div class="left">
					<p class="inline dollar_sign">$</p><input type='text' name='price' value="59" class="price inline" readonly>
				</div>
			</div>
			<input type='text' name='form_id' value="small_form" class="" hidden>
			<img src="assets/img/small_box.png" class="box">
			<input type="submit" value="Order" class="submit_button">
		</form>

		<form class="inline" action="processorder" method="post">
			<div class="inline half top">
				<input type='text' name='order_description' value="Medium" class="order_des" readonly>
				<p class="order_context">(Studio Apt.)</p>
				<input type='text' name='square_feet' value="5'x10'" class="small_font small_input" readonly>
				<input type='text' name='cubic_feet' value="200 cbft" class="small_font small_input" readonly>
				<div class="left">
					<p class="inline dollar_sign">$</p><input type='text' name='price' value="89" class="price inline" readonly>
				</div>
			</div>
			<input type='text' name='form_id' value="medium_form" class="" hidden>
			<img src="assets/img/medium_box.png" class="box">
			<input type="submit" value="Order" class="submit_button">
		</form>

		<form class="inline" action="processorder" method="post">
			<div class="inline half top">
				<input type='text' name='order_description' value="Large" class="order_des" readonly>
				<p class="order_context">(1-Bedroom Apt.)</p>
				<input type='text' name='square_feet' value="10'x10'" class="small_font small_input" readonly>
				<input type='text' name='cubic_feet' value="400 cbft" class="small_font small_input" readonly>
				<div class="left">
					<p class="inline dollar_sign">$</p><input type='text' name='price' value="159" class="price inline" readonly>
				</div>
			</div>
			<input type='text' name='form_id' value="large_form" class="" hidden>
			<img src="assets/img/large_box.png" class="box">
			<input type="submit" value="Order" class="submit_button">
		</form>

		<form class="inline" action="processorder" method="post">
			<div class="inline half top">
				<input type='text' name='order_description' value="Extra-Large" class="order_des" readonly>
				<p class="order_context">(2-Bedroom Apt.)</p>
				<input type='text' name='square_feet' value="10'x20'" class="small_font small_input" readonly>
				<input type='text' name='cubic_feet' value="800 cbft" class="small_font small_input" readonly>
				<div class="left">
					<p class="inline dollar_sign">$</p><input type='text' name='price' value="299" class="price inline" readonly>
				</div>
			</div>
			<input type='text' name='form_id' value="100 cbft" class="" hidden>
			<img src="assets/img/extralarge_box.png" class="box">
			<input type="submit" value="Order" class="submit_button">
		</form>

	</div>

	<div class="small_container no_margin">
		<p class="bigger_order">Need a bigger space? Text us at</p>
		<p class="bigger_order">1 (800) 234-8967</p>
	</div>

	<div class="small_container">
		<div class="line"></div>
		<img src="assets/img/ss_logo_black.png" alt="logo" id="logo_black">
		<div class="line"></div>	
	</div>

</div>

</body>