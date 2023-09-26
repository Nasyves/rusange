<?php
if (!isset($_SESSION['ADMIN_USERNAME'])) {
    header('location: index.php');
}
?>