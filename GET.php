<?php
session_start();
include 'tr.php';
$p=md5(trim($_POST['pin']));
$sql=mysql_query("SELECT * FROM admin WHERE hash='$p'");
if(mysql_num_rows($sql)==1){
	$_SESSION['h']=$p;
	header('location:login.php');
	}else{
		
		echo '<body onLoad="ld()"></body>';
		}
?>
<script>
function ld(){
	alert("Pin Incorrect, Retry!");
	window.location='admin.php';
	}
</script>