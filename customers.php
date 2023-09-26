
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
	<title>RUSANGE - Customers</title>
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
					<a href="#" class="active"><span class="las la-users"></span><span>Customers</span></a>
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
							<h3>Customers</h3>
							<!-- <a href="addcustomer.php" style="background: var(--main-color);border-radius: 10px;color: #fff;font-size: .8rem;padding: .5rem 1rem;border: 1px solid var(--main-color);text-decoration:none;">Add Customer<span class="las la-arrow-right"></span></a> -->
							<button data-toggle="modal" data-target="#exampleModal">Add Customer <span class="las la-arrow-right"></span></button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<!--<th>ID</th>-->
										<th>Fullname</th>
										<th>Phone</th>
										<th>Village</th>
										<th>Amount</th>
										<th>Round</th>
										<th>Paid</th>
										<th>Unpaid</th>
										<th>Date</th>
										<th>Action</th>
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
								?>	

									<tr>
										<!--<td id="cusid"><?php echo htmlentities($cnt);?></td>-->
										<td><?php echo htmlentities($row['fullname']);?></td>
										<td><?php echo htmlentities($row['phone']);?></td>
										<td><?php echo htmlentities($row['village']);?></td>
										<td><?php echo htmlentities($row['amount']);?></td>
										<td><?php echo $diff; ?></td>
										<td><?php echo $paid;?></td>
										<td><?php echo $unpaid;?></td>
										<?php 
											$update = mysqli_query($con,'UPDATE customers set sub_round = "'.$diff.'",total_paid ="'.$paid.'", unpaid ="'.$unpaid.'" where id ="'.$row['id'].'"')or die(mysqli_error($con));
										?>
										<td><?php echo htmlentities($row['date_of_pay']);?></td>
										<td>
											<a href="editcustomer.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-edit" style="font-size:20px;color:#DD2F6E;"></i></a>&nbsp;&nbsp;
											<a href="customers.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash" style="font-size:20px;color:#DD2F6E;"></i></a>&nbsp;&nbsp;
											
											<?php if($unpaid > 0){?>
												<a href="" onclick="addDataInvoice('<?php echo htmlentities($row['id']);?>','<?php echo $unpaid;?>','<?php echo htmlentities($row['fullname']);?>','<?php echo htmlentities($row['phone']);?>','<?php echo htmlentities($row['sector']);?>','<?php echo htmlentities($row['cell']);?>','<?php echo htmlentities($row['village']);?>');" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-file-alt" style="font-size:20px;color:#DD2F6E;"></i></a>
											<?php 
											}
											?>
											
										</td>
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
	<?php include('invoice_modal.php');?>

	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insert Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success d-none success"></div>
                    <div class="alert alert-danger d-none error"></div>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Enter Full Name">
                        </div>
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
                            <label for="exampleInputEmail1">Amount</label>
                            <input type="text" class="form-control" id="amount" placeholder="Enter Amount">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submit">Save</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
	function addDataInvoice(cus_id,amount,fullname,phone,sector,cell,village){
		//alert(id+' - '+names+ ' - '+amount)
		$('#exampleModal2 #remaining_amount').val(amount);
		$('#exampleModal2 #paid_amount').attr('data-amt',amount);
		$('#exampleModal2 #paid_amount').attr('data-ramti',amount);
		$('#exampleModal2 #fullname').val(fullname);
		$('#exampleModal2 #phone').val(phone);
		$('#exampleModal2 #sector').val(sector);
		$('#exampleModal2 #cell').val(cell);
		$('#exampleModal2 #village').val(village);
		$('#exampleModal2 #cus_id').val(cus_id);
		$('#exampleModal2 .receiver').hide();
		$('#exampleModal2 select option.'+sector+'.'+cell+'.'+village).show();
	}
	function saveBill(){
		var remaining_amount = $('#exampleModal2 #remaining_amount').val();
		var paid_amount = $('#exampleModal2 #paid_amount').val();
		var fullname = $('#exampleModal2 #fullname').val();
		var phone = $('#exampleModal2 #phone').val();
		var sector = $('#exampleModal2 #sector').val();
		var cell = $('#exampleModal2 #cell').val();
		var village  = $('#exampleModal2 #village').val();
		var month =  $('#exampleModal2 #month').val();
		var cus_id =  $('#exampleModal2 #cus_id').val();
		var rec_id =  $('#exampleModal2 #rec_id').val();
		if(remaining_amount == 0){
			var status = 'Paid';
		}else if(remaining_amount > 0 && remaining_amount < amount){
			var status = 'Unpaid';
		}
		var fullname = $('#fullname').val();
			var rec_id = $('#rec_id').val();
            var phone = $('#phone').val();
			var sector = $('#sector').val();
			var cell = $('#cell').val();
			var village = $('#village').val();
			var paid_amount = $('#paid_amount').val();
			var remaining_amount = $('#remaining_amount').val();
			var month = $('#month').val();
            if (fullname == '') {
                alert('Please enter full name')
            } else if (phone == '') {
                alert('Please enter phone number')
			}
			else if (sector == '') {
                alert('Please enter sector')
			}
			else if (cell == '') {
                alert('Please enter cell')
			}
			else if (village == '') {
                alert('Please enter village')
			}
			else if (paid_amount == '') {
                alert('Please enter paid amount')
			}
			else if (remaining_amount == '') {
                alert('Please enter remaining amount')
			}
			else if (month == '') {
                alert('Please enter month')
            } else {
				$.post('insertinvoice.php',{remaining_amount:remaining_amount,paid_amount:paid_amount,fullname:fullname,phone:phone,sector:sector,cell:cell ,village:village ,month:month ,status:status, cus_id:cus_id,rec_id:rec_id},function(data){
					$('#exampleModal2').append(data);
				});
			}
	}
	function calculAmount(Amount){
		pamt = $('#exampleModal2 #paid_amount').attr('data-amt');
		ramti = $('#exampleModal2 #paid_amount').attr('data-ramti');
		ramt = parseInt(pamt) - parseInt(Amount);
		if(Amount != ''){
			if(ramt > 0 && ramt <= pamt){
				$('#exampleModal2 #remaining_amount').val(ramt);
			}else{
				$('#exampleModal2 #remaining_amount').val(0);
			}
		}else{
			if(Amount == ''){
				$('#exampleModal2 #remaining_amount').val(ramti);
			}else if(ramt < 0){
				$('#exampleModal2 #remaining_amount').val(pamt);
			}
		}
		
	}
    $(function() {
        $(document).on('click', '#submit', function(e) {
            e.preventDefault();

            var fullname = $('#exampleModal #fullname').val();
            var phone = $('#exampleModal #phone').val();
			var sector = $('#exampleModal #sector').val();
			var cell = $('#exampleModal #cell').val();
			var village = $('#exampleModal #village').val();
			var amount = $('#exampleModal #amount').val();
            if (fullname == '') {
                alert('Please enter full name')
            } else if (phone == '') {
                alert('Please enter phone number')
			}
			else if (sector == '') {
                alert('Please enter sector')
			}
			else if (cell == '') {
                alert('Please enter cell')
			}
			else if (village == '') {
                alert('Please enter village')
			}
			else if (amount == '') {
                alert('Please enter amount')
            } else {
                $.ajax({
                    url: 'insert.php',
                    method: 'post',
                    data: {
                        fullname: fullname,
                        phone: phone,
						sector: sector,
						cell: cell,
						village: village,
						amount: amount
                    },
                    success: function(data) {
                        $('.success').removeClass('d-none').html(data);
                    },
                    error: function(data) {
                        $('.error').removeClass('d-none').html(data);
                    }
                });
            }
        });
    });
</script>
</html>