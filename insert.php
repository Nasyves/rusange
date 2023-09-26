<?php
    include('config.php');
    $fullname = mysqli_real_escape_string($con , $_POST['fullname']);
    $phone = mysqli_real_escape_string($con , $_POST['phone']);
    $sector = mysqli_real_escape_string($con , $_POST['sector']);
    $cell = mysqli_real_escape_string($con , $_POST['cell']);
    $village = mysqli_real_escape_string($con , $_POST['village']);
    $amount = mysqli_real_escape_string($con , $_POST['amount']);
    $sql=mysqli_query($con,"insert into 
        customers(fullname,phone,sector,cell,village,amount,sub_round,total_paid,unpaid) 
        values('$fullname','$phone','$sector','$cell','$village','$amount',0,0,0)");
    
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo 
            "
                <script>
                    location.href = 'customers.php';
                </script>
            ";
    }/*else{
        echo 
            "
                <script>
                    location.href = 'dashboard.php';
                </script>
            ";
    }*/

?>