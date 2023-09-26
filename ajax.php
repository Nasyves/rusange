<?php 
	include("config.php");

	if(isset($_POST['id'])){

		$id=$_POST['id'];
		$query = mysqli_query($con,"select * from states where country_id='$id' ");
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['id'];
			$cell=$row['name'];
			?>
				<option value="<?php echo $id; ?>"><?php echo $cell; ?></option>
			<?php
		}
	}

	if(isset($_POST['cellId'])){

		$id=$_POST['cellId'];
		$query = mysqli_query($con,"select * from cities where state_id='$id' ");
		while ($row=mysqli_fetch_array($query)) {
			$id=$row['id'];
			$village=$row['name'];
			?>
				<option value="<?php echo $id; ?>"><?php echo $village; ?></option>
			<?php
		}
	}
?>