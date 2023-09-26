
<?php
    $con = mysqli_connect("localhost", "root", "", "baheza2") or die("Unable to Connection");
    $cus_id = $_POST['cus_id'];
    $rec_id = $_POST['rec_id'];
    $fullname = mysqli_real_escape_string($con , $_POST['fullname']);
    $phone = mysqli_real_escape_string($con , $_POST['phone']);
    $sector = mysqli_real_escape_string($con , $_POST['sector']);
    $cell = mysqli_real_escape_string($con , $_POST['cell']);
    $village = mysqli_real_escape_string($con , $_POST['village']);
    $paid_amount = mysqli_real_escape_string($con , $_POST['paid_amount']);
    $remaining_amount = mysqli_real_escape_string($con , $_POST['remaining_amount']);
    $month = mysqli_real_escape_string($con , $_POST['month']);
    $status = mysqli_real_escape_string($con , $_POST['status']);
    $sql=mysqli_query($con,"insert into invoice(fullname,phone,sector,cell,village,paid_amount,remaining_amount,month,status,cus_id,rec_id) values('$fullname','$phone','$sector','$cell','$village','$paid_amount','$remaining_amount','$month','$status','$cus_id','$rec_id')");
    
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo 
            "
                <script>
                    location.href = 'invoices.php';
                </script>
            ";
    }else{
        echo 
            "
                <script>
                    location.href = 'invoices.php';
                </script>
            ";
    }

?>