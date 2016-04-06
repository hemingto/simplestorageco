<html>
<head>
	<title>Add Customer</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login_register.css">
</head>
<body>

	<div id='container'>
		<div id='header'>
			<h1 id='title'>Add Customer</h1>
		</div>

		<h1>Register</h1>
		<div id='register'>
			<form action='/add/process' method='post'>
				<p>Email: <input type='text' name='email'></p>
				<p>Password: <input type='password' name='password'></p>
				<p>Confirm Password: <input type='password' name='confirm_password'></p>
				<p>First Name: <input type='text' name='first_name'></p>
				<p>Last Name: <input type='text' name='last_name'></p>
				<p>Phone Number: <input type='tel' name='phone_number'></p>

				<h2>Home Address</h2>

				<p>Street: <input type='text' name='street'></p>
				<p>City: <input type='text' name='city'></p>
				<p>Zip: <input type='text' name='zip'></p>
				<p>State: <input type='text' name='state'></p>
				<p>Country: <input type='text' name='country' value="USA"></p>

				<input type='submit' value='Add Customer'>
			</form>
		</div>

		<div id ='alerts'>
		<?php
			// var_dump($this->session->userdata());
			// echo "<div id='success'>".$this->session->flashdata('success')."</div>";
			// echo "<div id='error'>".$this->session->flashdata('errors')."</div>";
		?>
		</div>
	</div>
</body>
</html>