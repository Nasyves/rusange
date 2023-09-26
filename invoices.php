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
	<title>RUSANGE - Invoices</title>
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
					<a href="invoices.php" class="active"><span class="las la-clipboard-list"></span><span>Invoices</span></a>
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
							<h3>Invoices</h3>
							<!-- <a href="addcustomer.php" style="background: var(--main-color);border-radius: 10px;color: #fff;font-size: .8rem;padding: .5rem 1rem;border: 1px solid var(--main-color);text-decoration:none;">Add Customer<span class="las la-arrow-right"></span></a> -->
						</div>

						<div class="card-body">
							<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>ID</th>
										<th>Fullname</th>
										<th>Receiver</th>
										<th>Phone</th>
										<th>Village</th>
										<th>Paid</th>
										<th>Remaining</th>
										<th>Month</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
								<?php $query=mysqli_query($con,"select invoice.fullname as fullname1,invoice.phone as phone1,invoice.sector as sector1,invoice.cell as cell1,invoice.village as village1,receivers.fullname as fullname2 ,invoice.paid_amount as paid_amount,invoice.remaining_amount as remaining_amount,invoice.month as month,invoice.status as status from invoice LEFT JOIN receivers ON invoice.rec_id = receivers.id");
								$cnt=1;
								while($row=mysqli_fetch_array($query))
								{
								?>	
									<tr>
										<td><?php echo htmlentities($cnt);?></td>
										<td><?php echo htmlentities($row['fullname1']);?></td>
										<td><?php echo htmlentities($row['fullname2']);?></td>
										<td><?php echo htmlentities($row['phone1']);?></td>
										<td><?php echo htmlentities($row['village1']);?></td>
										<td><?php echo htmlentities($row['paid_amount']);?></td>
										<td><?php echo htmlentities($row['remaining_amount']);?></td>
										<td><?php echo htmlentities($row['month']);?></td>
										<td><?php echo htmlentities($row['status']);?></td>
									</tr>
								<?php $cnt=$cnt+1; } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				</div>
			</div>
			</main>
	</div>
	<!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insert Invoice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success d-none success"></div>
                    <div class="alert alert-danger d-none error"></div>
                    <form id="mfor">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="cus_id">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Enter Full Name">
                        </div>
                        <label for="exampleInputEmail1">Receiver Name</label>
                        <select name="rec_id" id="rec_id" class="form-control">
                        <?php $query=mysqli_query($con,"select * from receivers");
								$cnt=1;
								while($row=mysqli_fetch_array($query))
								{
								?>
                                    <option class="receiver <?php echo $row['sector'];?> <?php echo $row['cell'];?> <?php echo $row['village'];?>" value="<?php echo $row['id'];?>"><?php echo $row['fullname'];?></option>
                                <?php
                                }
                                ?>
                            
                        </select>
                        <div class="form-group">
                            <label for="exampleInputEmail1">phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1">Sector</label>
                            <input type="text" class="form-control" id="sector" placeholder="Enter Sector">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1">Cell</label>
                            <input type="text" class="form-control" id="cell" placeholder="Enter Cell">
                        </div>
						<div class="form-group">
                            <label for="exampleInputEmail1">Village</label>
                            <input type="text" class="form-control" id="village" placeholder="Enter Village">
						</div>
						<div class="form-group">
                            <label for="exampleInputEmail1">Paid Amount</label>
                            <input onkeyup="calculAmount(this.value);" type="text" class="form-control" id="paid_amount" placeholder="Enter Paid Amount">
						</div>
						<div class="form-group">
                            <label for="exampleInputEmail1">Remaining Amount</label>
                            <input type="text" class="form-control" id="remaining_amount" placeholder="Enter Remaining Amount">
						</div>
						<div class="form-group">
                            <label for="exampleInputEmail1">Month</label>
                            <input type="month" class="form-control" id="month">
						</div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button onclick="event.stopPropagation(); event.preventDefault(); saveBill();" type="button" class="btn btn-primary" id="submitBill">Save</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>