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