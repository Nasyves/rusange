<?php
include('config.php');
session_start();
if(isset($_GET['del']))
	{
	mysqli_query($con,"DELETE FROM invoice where id = '".$_GET['id']."'");
    
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>RUSANGE - Contact</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		textarea:hover {
			border: lightblue 3px solid;
		}
	</style>
</head>
<body>
	<input type="checkbox" id="nav-toggle" name="">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h3><span  class="las la-home"></span><span>RUSANGE SYSTEM</span></h2>
		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="dashboard.php"><span class="las la-igloo"></span><span>Dashboard</span></a>
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
					<a href="#" class="active"><span class="las la-receipt"></span><span>Contacts</span></a>
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
				<div class="user-wrapper">
					<div>
						<h5>
							Welcome; 
							<?php
								echo $_SESSION['ADMIN_USERNAME'];
							?>
							<a href="logout.php"><img src="power.png" style="height:20px"></a>
						</h5>
				</div>
			</div>
		</header>
		<main>
		<div class="recent-grid">
				<div class="projects">
					<div class="card"  style="width:55rem;">
						<div class="card-header">
							<h3>Send Message</h3>
						</div>

						<div class="card-body">
							<div class="table-responsive">
							<div class="form">
								<label for="msg"> Message: </label>
								<textarea style="width: 100%; height:400px;" name="msg"></textarea>
							</div>
							<div class="choice">
								<div class="form">
									<label for="destination"> Destination: </label>
									<select name="destination" id="destination" class="form-control">
										<option value=""> Select Destination </option>
										<option value=""> Employee </option>
										<option value=""> Clients </option>
									</select>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" id="submitBill"> Send </button>
				                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel </button>
				                    
				                </div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			</main>
</body>
</html>