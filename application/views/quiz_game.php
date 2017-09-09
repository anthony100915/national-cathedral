<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Skill Test</title>
	<link rel="icon" href="favicon/favicon.ico" type="icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Welcome to Skill Test</h1>

		<form method="" action="<?php echo base_url();?>Questions/startnow">
			<input type="submit" value="Start Quiz" class="btn btn-info">
		</form>

	</div>
</body>
</html>