<?php
	include("config.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>RUSANGE - HomePage</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>

	<input type="checkbox" id="nav-toggle" name="">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h3><span  class="las la-home"></span><span>RUSANGE SYSTEM</span></h3>
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
			<div class="cards">
				<div class="card-single">
					<div>
						<?php
								$sql = "SELECT * FROM customers";
								if ($result=mysqli_query($con,$sql)) {
									$rowcount=mysqli_num_rows($result);
									echo "<h1>" .$rowcount. "</h1>"; 
								}
						?>
						<span>Customers</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<?php
								$sql = "SELECT * FROM customers where unpaid!=0";
								if ($result=mysqli_query($con,$sql)) {
									$rowcount=mysqli_num_rows($result);
									echo "<h1>" .$rowcount. "</h1>"; 
								}
						?>
						<span>Debt</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<?php
							$sql = mysqli_query($con, "SELECT SUM(unpaid) AS sum FROM customers");
							$result=mysqli_fetch_assoc($sql);
							echo "<h1>" .$result['sum']."</h1>";
						?>
						<span>Debt Income</span>
					</div>
					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<?php

							$sql="SELECT SUM(amount) AS sum FROM customers";
							$result = mysqli_query($con,$sql);
							$num = mysqli_fetch_assoc($result);
						?>
						<h1><?php echo $num['sum']; ?> Frw</h1>
						<span>Expectation</span>
					</div>
					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>
			</div>

			<hr>

			<?php
				/*$s = $_GET["search"];

				$terms = explode(" ", $s);
				$query = "SELECT * FROM customers ";
				foreach ($terms as $each) {
					$i++;

					if($i==1){
						$query.="keywords LIKE '%$each%' ";
					}else {
						$query.="OR keywords LIKE '%$each%' ";
					}
				}
				$query = mysqli_query($con,$query);
				$numrows = mysqli_num_rows($query);
				if($numrows > 0){

						while($row = mysqli_fetch_assoc($query)){
							$id = $row['id'];
							$fullname = $row['fullname'];
							$phone = $row['phone'];
							$sector = $row['sector'];
							$cell = $row['cell'];
							$village = $row['village'];
							$amount = $row['amount'];
							$sub_round = $row['sub_round'];
							$date_of_pay = $row['date_of_pay'];
							echo"
							<table>
							
								<tbody>
							<tr>
										<td>".$fullname."</td>
										<td>".$phone."</td>
										<td>".$village."</td>
										<td>".$amount."</td>
									</tr>
									</tbody>
";
						}
				}else {
					echo "No Results found for \"<b>$s</b>\"";
				}*/
			?>
			<div class="recent-grid">
				<div class="customers">
					<div class="card">
						<div class="card-header">
							<h3>Sectors Perfomance</h3>

							<!--<button>See all <span class="las la-arrow-right"></span></button>-->
						</div>
						<div class="card-body">
							<div id="chart_div"></div>
				
				</div>
			</div>
		</div>
	</div>
</main>
</div>
	
</body>
<?php 
$query=mysqli_query($con,"select DISTINCT(sector) from customers");
	
	$sta0 = [];
	$sta1 = ['City', 'Customer', 'Paid', 'Unpaid'];
	array_push($sta0,$sta1);
	while($row=mysqli_fetch_array($query))
	{
		$query2=mysqli_query($con,'select count(*) from customers WHERE sector = "'.$row["sector"].'"');
		$row2=mysqli_fetch_row($query2);
		$query3=mysqli_query($con,'select count(*) from customers WHERE total_paid = (amount*sub_round) AND total_paid != 0 AND sector = "'.$row["sector"].'"');
		$row3=mysqli_fetch_row($query3);
		$query4=mysqli_query($con,'select count(*) from customers WHERE total_paid < (amount*sub_round) AND total_paid > 0 AND sector = "'.$row["sector"].'"');
		$row4=mysqli_fetch_row($query4);
		$sta2 = array($row["sector"],intval($row2[0]), intval($row3[0]),intval($row4[0]));
		array_push($sta0,$sta2);
	}
	?>	
<script type="text/javascript">
	google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBarColors);

function drawBarColors() {
      var data = google.visualization.arrayToDataTable(
		<?php echo json_encode($sta0);?>
      );

      var options = {
        title: 'Payment by Sectors',
        chartArea: {width: '50%'},
        colors: ['#b0120a', '#ffab91','#3C20DD','#000000'],
        hAxis: {
          title: 'Total Population',
          minValue: 0
        },   
        vAxis: {
          title: 'Sector'
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
</script>

</html>