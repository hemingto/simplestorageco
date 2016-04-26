<html>

<?php
	require 'partials/html_head.php';
?>
<head>
	<title>Book Appointment | Simple Storage Co.</title>
	<link rel="stylesheet" type="text/css" href="assets/css/add_customer.css">
	<link rel="stylesheet" type="text/css" href="assets/css/appointment.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="jquery.timepicker.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	<link rel="stylesheet" href="/resources/demos/style.css">
	  <script>
	  $(function() {
	    $( "#datepicker" ).datepicker({
	    	inline: true,
	    	altField: '#dateinput',
	    });
		
		$('#dateinput').change(function(){
    		$('#datepicker').datepicker('setDate', $(this).val());
		});

	  });
	  </script>
</head>
</head>

<img src="assets/img/ss_logo.png" alt="logo" id="logo">

<div id="top_bar" class="gradient">
	<h1>Book Appointment</h1>
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
		<form method="post" action="appointmentprocess">
			<div id="datepicker"></div>
			<input type="text" id="dateinput" name="date" />
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