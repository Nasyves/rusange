
<?php
include('config.php');
session_start();
if(isset($_GET['del']))
	{
	mysqli_query($con,"delete from customers where id = '".$_GET['id']."'");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>RUSANGE - Debts</title>
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
	
	<div class="sidebar">
		<div class="sidebar-brand">
			<h3><span  class="las la-home"></span><span>RUSANGE SYSTEM</span></h3>
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
					<a href="debt.php" class="active"><span class="las la-shopping-bag"></span><span>Debts</span></a>
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
		</header>
		<main>
		<div class="recent-grid">
				<div class="projects">
					<div class="card"  style="width:55rem;">
						<div class="card-header">
							<h3>Debts</h3>
							<select>
								<option>Select Region</option>
								<?php
									$query=mysqli_query($con,"SELECT * FROM cities ORDER BY name ASC");
									while($result = mysqli_fetch_assoc($query)){
										echo "<option value = ".$result['id'].">".$result['name']."</option>";
									}
								?>
							</select>
						</div>
						<div class="card-body">
							<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>ID</th>
										<th>Fullname</th>
										<th>Phone</th>
										<th>Sector</th>
										<th>Cell</th>
										<th>Village</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
								<?php $query=mysqli_query($con,"select * from customers");
								$cnt=1;
								while($row=mysqli_fetch_array($query))
								{
									$now = date('Y-m-d');
									$reg = date('Y-m-d',strtotime($row['date_of_pay']));
									

									$ts1 = strtotime($reg);
									$ts2 = strtotime($now);

									$year1 = date('Y', $ts1);
									$year2 = date('Y', $ts2);

									$month1 = date('m', $ts1);
									$month2 = date('m', $ts2);

									$diff = (($year2 - $year1) * 12) + ($month2 - $month1);
									if(date('d',$ts1) > date('d',$ts2)){
										$diff = $diff - 1;
									}
									if($diff >= 1){
										$read_paid = mysqli_query($con,'select SUM(paid_amount) from invoice where cus_id ="'.$row['id'].'"') or die(mysqli_error($con));
										$su = mysqli_fetch_row($read_paid);
										$paid = $su[0];
										$unpaid = ($row['amount'] * $diff) - $paid;
									}else{
										$paid = 0; 
										$unpaid = 0;
									}
									if($unpaid != 0){
								?>	

									<tr>
										<td id="cusid"><?php echo htmlentities($cnt);?></td>
										<td><?php echo htmlentities($row['fullname']);?></td>
										<td><?php echo htmlentities($row['phone']);?></td>
										<td><?php echo htmlentities($row['sector']);?></td>
										<td><?php echo htmlentities($row['cell']);?></td>
										<td><?php echo htmlentities($row['village']);?></td>
										<td><?php echo $unpaid;?></td>
									</tr>
								<?php $cnt=$cnt+1; }} ?>
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