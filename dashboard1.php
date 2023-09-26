<?php
session_start();
include('config.php');

$sql = "SELECT * FROM user";
$res=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($res);
        	echo $row['usertype'];

    ?>