<?php
    include('config.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>RUSANGE - Finance</title>
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
</head>
<body>

	<style type="text/css">
		.menu {
			display: flex;
			width: 120%;
			border-bottom: 1px solid gray;
			box-shadow: gray 10px;
		}
		.menu li {
			background: white;
			margin-right: 5px;
			padding: 5px;
			border-radius: 0 10px 0 0;
			width: 100%;
			text-align: center;
			cursor: pointer;
		}
		
		.first {
			display: flex;
			width: 120%;
			margin-left: 40px;
		}

		.one {
			margin-right: 20%;
		}

		thead {
			border-bottom: 3px solid black;
			border-top: 3px solid black;
			background: var(--main-color);
			color: whitesmoke;
		}

		th {
			margin-right: 20px;
		}

		.balance {
			display: flex;
		}

		.balance span {
			border-bottom: 2px solid black;
			margin-left: 20px;
			margin-top: 5px;
		}

		.one .fas {
			font-size: 250%;
		}

		.one h4, .one i {
			display: inline;
		}

		.one h4 {
			margin-left: 30px;
			/*border-bottom: 2px solid black;*/
		}

		.bank {
			margin-top: 10px;
			border-bottom: 2px solid black;
		}

		.card1 {
			margin-top: 10px;
			border-bottom: 2px solid black;
		}

		.cash {
			margin-top: 10px;
			margin-bottom: 50px;
			border-bottom: 2px solid black;

		}

		.one span {
			color: var(--main-color);
			font-size: 20px;
			font-weight: bolder;
		}

		h3 {
			color: var(--main-color);
		}

		.first {
			border-bottom: 3px dashed black;
		}

		.danger {
			color: indianred;
		}

		.three, .four {
			display: flex;
			margin-left: 50px;
		}

		.receive {
			margin-right: 30%;
		}

		.pay {
			margin-right: 34%;
		}

		.second {
			width: 120%;
			margin-top: 30px;
		}

		.three {
			border-bottom: 2px dashed black;
		}

		.four {
			margin-top: 30px;
		}

		.receive i, .receive h4 {
			display: inline;
		}

		.pay i, .pay h4 {
			display: inline;
		}

		.pay i, .receive i {
			font-size: 250%;
			margin-right: 30px;
		}

		.pay span, .receive span {
			color: var(--main-color);
			font-weight: bolder;
			font-size: 20px;
		}

		a {
			color: black;
			text-decoration: none;
		}

		a: hover {
			text-decoration: none;
		}
	</style>

	<input type="checkbox" id="nav-toggle" name="">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h3><span  class="las la-home"></span><span>RUSANGE SYSTEM</span></h2>
		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="index.php"><span class="las la-igloo"></span><span>Dashboard</span></a>
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
					<a href="#" class="active"><span class="las la-user-circle"></span><span>Finance</span></a>
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
					<span class="las la-search"></span>
					<input type="search" name="" placeholder="Search here" />
				</div>
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
			</div>
		</header>
		<main>
		<div class="recent-grid">
				<div class="projects">
						
				<!--<img src="page.jpg" style="height:350px; margin-left: 100px;">-->

					<ul class="menu">
						<li class="active1">My Accounts</li>
						<li><a href="expenses.php">Expenses</a></li>
						<li><a href="profitloss.php">Profit & Loss</a></li>
						<li><a href="cashflow.php">Cash Flow</a></li>
						<li>Insights</li>
						<li>Reports</li>
					</ul>
					<div class="contain">
						<div class="balance">
							<h3>Balance:</h3>
							<span><h4>45,000,000</h4></span>
						</div>
					<div class="first">
						<div class="one">
							<div class="bank">
								<span>Bank</span><br>
								<i class="fas fa-university"></i>
								<h4>5,000,000</h4>
							</div>

							<div class="card1">
								<span>Card</span><br>
								<i class="fas fa-credit-card"></i>
								<h4>5,000,000</h4>
							</div>

							<div class="cash">
								<span>Cash</span><br>
								<i class="fas fa-money-bill-alt"></i>
								<h4>5,000,000</h4>
							</div>
						</div>
						<div class="two">
							<table>
								<thead>
									<tr>
										<th>Account</th>
										<th>Type</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
											<?php
                                        $query = mysqli_query($con,"select * from accounts");
                                        while ($row=mysqli_fetch_array($query)) {
                                        	?>
                                        	<tr>
                                            <td><?php echo $row['acc_name'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <td><?php echo $row['amount'];?></td>
                                        	</tr>
                                        
                                        <?php
                                        }
                                     	?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="second">
						<div class="three">
						<div class="receive">
							<span>Accounts Receivable</span><br>
							<i class="fas fa-forward"></i>
							<h4>500,000</h4>
						</div>
							<table>
							<tbody>
								<tr>
									<td>Invoice AMT Past Due</td>
									<td>250</td>
								</tr>
								<tr>
									<td>Invoice AMT Not Due Yet</td>
									<td>250</td>
								</tr>
								<tr>
									<td class="danger">Customer Credit AMT</td>
									<td>250</td>
								</tr>
							</tbody>
							</table>
						</div>
						<div class="four">
							<div class="pay">
							<span>Accounts Payable</span><br>
							<i class="fas fa-backward"></i>
							<h4>500,000</h4>
						</div>
							<table>
							<tbody>
								<tr>
									<td>Invoice AMT Past Due</td>
									<td>250</td>
								</tr>
								<tr>
									<td>Invoice AMT Not Due Yet</td>
									<td>250</td>
								</tr>
								<tr>
									<td class="danger">Customer Credit AMT</td>
									<td>250</td>
								</tr>
							</tbody>
							</table>
						</div>
					</div>
				</div>

				</div>
		</div>
		</main>
	</div>
</body>
</html>