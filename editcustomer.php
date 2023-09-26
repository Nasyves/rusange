<?php
include('config.php');
$id=$_GET["id"];
$res=mysqli_query($con, "select * from customers where id=$id");
    while($row=mysqli_fetch_array($res))
    {
        $fullname=$row["fullname"];
		$phone=$row["phone"];
		$sector=$row["sector"];
		$cell=$row["cell"];
		$village=$row["village"];
		$amount=$row["amount"];
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>Baheza - Update Customer</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
			<h3><span  class="las la-home"></span><span>BAHEZA SYSTEM</span></h2>
		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="index.php"><span class="las la-igloo"></span><span>Dashboard</span></a>
				</li>
				<li>
					<a href="#" class="active"><span class="las la-users"></span><span>Customers</span></a>
				</li>
				<li>
					<a href="invoices.php"><span class="las la-clipboard-list"></span><span>Invoices</span></a>
				</li>
				<li>
					<a href="sectors.php"><span class="las la-shopping-bag"></span><span>Sectors</span></a>
				</li>
				<li>
					<a href="receivers.php"><span class="las la-receipt"></span><span>Receivers</span></a>
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
					<img src="img/Tadhim.jpg" width="30px" height="30px" alt="">
					<div>
						<h4>Provy</h4>
						<small>Super admin</small>
					</div>
				</div>
			</div>
		</header>
		<main>
		<div class="recent-grid">
				<div class="projects">
					<div class="card">
						<div class="card-header">
							<h3>Update Customers</h3>
							<a href="customers.php" style="background: var(--main-color);border-radius: 10px;color: #fff;font-size: .8rem;padding: .5rem 1rem;border: 1px solid var(--main-color);text-decoration:none;">Manage Customer<span class="las la-arrow-right"></span></a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="">Fullname</label><br>
                                        <input type="text" name="fullname" class="form-control" value="<?php echo $fullname;?>" id="">
                                    </div>
									<div class="form-group">
                                        <label for="">Phone Number</label><br>
                                        <input type="text" name="phone" class="form-control" value="<?php echo $phone;?>" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sector</label><br>
                                        <input type="text" name="sector" class="form-control" id="" value="<?php echo $sector;?>">
                                    </div>
									<div class="form-group">
                                        <label for="">Cell</label><br>
                                        <input type="text" name="cell" class="form-control" id="" value="<?php echo $cell;?>">
                                    </div>
									<div class="form-group">
                                        <label for="">Village</label><br>
                                        <input type="text" name="village" class="form-control" id="" value="<?php echo $village;?>">
                                    </div>
									<div class="form-group">
                                        <label for="">Amount</label><br>
                                        <input type="text" name="amount" class="form-control" id="" value="<?php echo $amount;?>">
                                    </div>
									<div class="form-group">
										<input type="submit" name="save" value="Update Customer" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
						</div>
					</div>
				</div>
				</div>
			</div>
			</main>
	</div>
	<?php  
	if(isset($_POST["save"]))
	{
		mysqli_query($con, "update customers set fullname='$_POST[fullname]', phone='$_POST[phone]', sector='$_POST[sector]', cell='$_POST[cell]', village='$_POST[village]', amount='$_POST[amount]' where id=$id") or die(mysqli_error($con));
		?>
		<script type="text/javascript">
			window.location="customers.php"
		</script>
		<?php
	}
	?>
</body>
</html>