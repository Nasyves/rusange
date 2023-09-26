<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>dashboard 0</title>
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
					<a href="dashboard.php"><span class="las la-igloo"></span><span>Dashboard</span></a>
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
							<h3>Customers</h3>
							<a href="addcustomer.php" style="background: var(--main-color);border-radius: 10px;color: #fff;font-size: .8rem;padding: .5rem 1rem;border: 1px solid var(--main-color);text-decoration:none;">Customer<span class="las la-arrow-right"></span></a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="">Fullname</label><br>
                                        <input type="text" name="fullname" class="form-control" id="" placeholder="Fullname">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sector</label><br>
                                        <input type="text" name="" class="form-control" id="" placeholder="Fullname">
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
</body>
</html>