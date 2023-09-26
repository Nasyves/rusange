<?php
    include('config.php');
    $fullname = mysqli_real_escape_string($con , $_POST['fullname']);
    $phone = mysqli_real_escape_string($con , $_POST['phone']);
    $sector = mysqli_real_escape_string($con , $_POST['sector']);
    $cell = mysqli_real_escape_string($con , $_POST['cell']);
    $village = mysqli_real_escape_string($con , $_POST['village']);
    $sql=mysqli_query($con,"insert into receivers(fullname,phone,sector,cell,village) values('$fullname','$phone','$sector','$cell','$village')");
    
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo 
            "
                <script>
                    location.href = 'receivers.php';
                </script>
            ";
    }else{
        echo 
            "
                <script>
                    location.href = 'receivers.php';
                </script>
            ";
    }

?>