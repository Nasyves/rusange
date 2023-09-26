<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>Baheza - HomePage</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>

	<input type="checkbox" id="nav-toggle" name="">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h3><span  class="las la-home"></span><span>BAHEZA SYSTEM</span></h3>
		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="#" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
				</li>
				<li>
					<a href="customers.php"><span class="las la-users"></span><span>Customers</span></a>
				</li>
				<li>
					<a href="invoices.php"><span class="las la-clipboard-list"></span><span>Invoices</span></a>
				</li>
				<li>
					<a href="debt.php"><span class="las la-shopping-bag"></span><span>Debts</span></a>
				</li>
				<li>
					<a href="receivers.php"><span class="las la-receipt"></span><span>Receivers</span></a>
				</li>
				<li>
					<a href="contact.php"><span class="las la-receipt"></span><span>Contacts</span></a>
				</li>
				<li>
					<a href="finance.php"><span class="las la-user-circle"></span><span>Finance</span></a>
				</li>
				<li>
					<a href="report.php"><span class="las la-clipboard-list"></span><span>Report</span></a>
				</li>
			</ul>
		</div>
	</div>
	<div class="main-content">
		<header>
			<div class="header-title">
				<h2>
					<label for="nav-toggle">
						<span class="las la-bars"></span>
					</label>
					Dashboard
				</h2>
				<div class="search-wrapper">
					<form method="post" action="search.php">
					<span class="las la-search"></span>
					<input type="search" name="search" placeholder="Search here" />
					<!--<input type="submit" name="search_btn">-->
				</form>
				</div>
				<div class="user-wrapper">
					<div>
						<h5>
							Welcome; 
							<?php
								/*echo $_SESSION['ADMIN_USERNAME'];*/
							?>
							<a href="logout.php"><img src="power.png" style="height:20px"></a>
						</h5>
				</div>
			</div>
			</div>
		</header>