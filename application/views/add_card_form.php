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

<form action="/placeOrder" method="post" class="pull-right">
	<input type="hidden" name="amount" value="">
	<input type="hidden" name="customer_id" value="">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_bkpHozSLIXoN2DHJgihojEWP"
    data-amount=""
    data-name=""
    data-description="2 widgets"
    data-image="/assets/img/main/store.png">
  </script>
</form>
<body>