<?php
	$number_one = "+7(978) 659-59-56";
	$number_two = "+7(988) 162-93-56";
	$adress = "Симферополь, ул. Будёнова, 32";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>БалтГазСервис</title>
</head>
<body>
<div class="main_site">
<header>
	<div class="main_header">
		<div class="logo"><img src="/main_img/logo_1200x1200_150_auto.jpg"></div>
		<div class="name_date_time">
			<div class="company_name"><span>ООО "АИР"</span> <br>Филиал г. Симферополь</div>
			<div class="header_date_time"><?php echo date("d.m.Y");?><br><?php echo date("H:i");?></div>
		</div>
		<div class="contact_info">
			<div class="number"><a href="#" class="small-phone">Звоните сейчас!</a><br><?php echo $number_one; ?><br><?php echo $number_two; ?></div>
			<div class="adress"><?php echo $adress; ?><br>пн. - пт.: 08:30 - 17:30</div>
		</div>

	</div>
	<div class="slider_img">
		<img src="../main_img/2_960_auto.jpg">
	</div>