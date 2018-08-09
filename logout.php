<?php
session_start();
include 'tr.php';
session_destroy();
header('location:admin.php');
?>