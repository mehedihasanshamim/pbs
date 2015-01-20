<!DOCTYPE HTML>
<html lang="en-US">
<head>
	
	<meta charset="UTF-8">
	<title>Pbs</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<div class="wrapper">
		<div class="header">
		
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php?page=home">হোম</a></li>
				<li><a href="index.php?page=committee_info">সমিতির তথ্য</a></li>
				<li><a href="index.php?page=consumer_service">গ্রাহক সেবা</a></li>
				<li><a href="index.php?page=bill">বিল</a></li>
				<li><a href="index.php?page=online_service">অনলাইন সেবা</a></li>
				<li><a href="index.php?page=employee_info">কর্মকর্তা গন</a></li>
				<li><a href="index.php?page=notice_board">নোটিশ বোর্ড</a></li>
			</ul>
		</div>
		<div class="content">
			<div class="left_content">
				<ul>
					<li><a href="index.php?page=application_form">আবেদন ফর্ম</a></li>
					<li><a href="index.php?page=update_apply_form">আবেদন পরিবর্তন করুন</a></li>
					<li><a href="index.php?page=apply_form_sure">আবেদন নিশ্চিত করুন</a></li>
					<li><a href="index.php?pge=show_report">প্রতিবেদন দেখুন</a></li>
					<li><a href="index.php?page=show_location">অবস্থান দেখুন</a></li>
					<li><a href="index.php?page=search_security_number">গোপন নাম্বার খুজুন</a></li>
					<li><a href="index.php?page=search_serial_number">ক্রমিক নাম্বার খুজুন</a></li>
					<li><a href="index.php?page=feedback">মতামত দিন</a></li>
					
				</ul>
			</div>
			<div class="mid_content">
				<?php
					if(isset($_GET['page'])){
						$page=$_GET['page'];
						$page1=$page.".php";
						include($page1);
					}
					else{
						include("home.php");
					}
				?>
			</div>
			
			
		</div>
		<div class="footer">
		</div>
		
	</div>
</body>
</html>