<html>

<?php
	require 'partials/html_head.php';
?>
<head>
	<title>Add Customer | Simple Storage Co.</title>
	<link rel="stylesheet" type="text/css" href="assets/css/add_customer.css">
</head>

<img src="assets/img/ss_logo.png" alt="logo" id="logo">

<div id="top_bar" class="gradient">
	<h1>Customer Info</h1>
</div>

<body>

<div class="center">

	<div class="block small_icon_div">
		<img src="assets/img/small_customer_icon.png" alt="Customer icon" class="small_icon current">
		<img src="assets/img/small_money_icon.png" alt="Customer icon" class="small_icon opacity">
		<img src="assets/img/small_camera_icon.png" alt="Customer icon" class="small_icon camera_icon opacity">
	</div>

	<div id ='alerts'>
		<?php
			echo "<div class='success'>".$this->session->flashdata('success')."</div>";
			echo "<div class='error'>".$this->session->flashdata('errors')."</div>";
		?>
	</div>

	<div class="small_container">
		<form action='process' method='post'>
			<input class="focus" type='text' name='email' placeholder="Email">
			<input class="focus" type='password' name='password' placeholder="Password">
			<input class="focus" type='password' name='confirm_password' placeholder="Confirm Password">
			<p class="reminder">Remember your login info so you can access your storage items online</p>
			<input class="focus" type='text' name='first_name' placeholder="First Name">
			<input class="focus" type='text' name='last_name' placeholder="Last Name">
			<input class="focus" type='tel' name='phone_number' placeholder="Phone Number">
			<input class="focus" type='text' name='street' placeholder="Street">
			<input type='text' name='city' placeholder="City" class='inline half focus'>
			<input type='text' name='state' placeholder="California" value="California" class='inline half' readonly>
			<input type='text' name='zip' placeholder="Zip" class="inline two_thirds focus">
			<input type='text' name='country' value="USA" class="inline one_third" readonly>
			<input type='hidden' name='customer_info'>
			<input type='submit' value='Next' class="submit_button">
		</form>
	</div>

	<div class="small_container">
		<div class="line"></div>
		<img src="assets/img/ss_logo_black.png" alt="logo" id="logo_black">
		<div class="line"></div>	
	</div>

</div>

</body>

</html>