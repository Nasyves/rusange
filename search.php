<?php

include("config.php");



		if (isset($_POST['search_btn'])) {
			$search = mysqli_real_escape_string($con, $_POST['search']);
			$sql = "SELECT * FROM customers WHERE id LIKE '%$search%' OR fullname LIKE '%$search%' OR phone LIKE '%$search%' OR sector LIKE '%$search%' OR cell LIKE '%$search%' OR village LIKE '%$search%' OR amount LIKE '%$search%' OR sub_round LIKE '%$search%' OR date_of_pay LIKE '%$search%'";
			$result = mysqli_query($con, $sql);
			$queryResult = mysqli_num_rows($result);

			if ($queryResult > 0) {
				while(mysqli_fetch_assoc($result)){
					echo"
					<div class='card-body'>
							<div class='table-responsive'>
							<table class='table'>
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

									<tr>
										<td>".$row['fullname']."</td>
										<td>".$row['phone']."</td>
										<td>".$row['village']."</td>
										<td>".$row['amount']."</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>";
				}
			}
			else {
				echo "No Results found";
			}
?>