<html>

<?php
	require 'partials/html_head.php';
?>
<head>
	<title>Home | Simple Storage Co.</title>
	<link rel="stylesheet" type="text/css" href="assets/css/homepage.css">
</head>

<body>

<img src="assets/img/ss_logo.png" alt="logo" id="logo">

<div id="top_bar" class="gradient">
	<h1>Home</h1>
</div>

<div id="container">
	<div class="icon_div first">
		<form action='/add' method='post'>
			<input type="image" src="assets/img/add_customer_icon.png" alt="add customer information" class="icon_img grow">
			<input type="submit" value="Add Customer" class="input_button">
		</form>
	</div>
	<div class="icon_div">
		<form action='' method='post'>
			<input type="image" src="assets/img/search_info_icon.png" alt="search customer information" class="icon_img grow">
			<input type="submit" value="Search Customer Info" class="input_button">
		</form>
	</div>
	<div class="icon_div">
		<form action='' method='post'>
			<input type="image" src="assets/img/update_info_icon.png" alt="update customer information" class="icon_img grow">
			<input type="submit" value="Update Customer Info" class="input_button">
		</form>
	</div>
</div>

<div class="small_container">
	<div class="line"></div>
	<img src="assets/img/ss_logo_black.png" alt="logo" id="logo_black">
	<div class="line"></div>
</div>

</body>

</html>