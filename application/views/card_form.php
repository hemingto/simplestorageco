<html>

<?php
	require 'partials/html_head.php';
?>
<head>
	<title>Add Credit Card | Simple Storage Co.</title>
	<link rel="stylesheet" type="text/css" href="assets/css/add_customer.css">
</head>

<img src="assets/img/ss_logo.png" alt="logo" id="logo">

<div id="top_bar" class="gradient">
  <h1>Credit Card Info</h1>
</div>

<div class="center">

  <div class="block small_icon_div">
    <img src="assets/img/small_customer_icon.png" alt="Customer icon" class="small_icon opacity">
    <img src="assets/img/small_money_icon.png" alt="Customer icon" class="small_icon current">
    <img src="assets/img/small_camera_icon.png" alt="Customer icon" class="small_icon camera_icon opacity">
  </div>



<form action="/add/process" method='post'>
  

  <?php 
    var_dump($this->session->userdata())
  ?>
</form>

</div>
<body>