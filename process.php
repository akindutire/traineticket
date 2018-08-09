<?php
session_start();
include 'tr.php';


$date=date('h:i: a',time());
if(isset($_GET['ar'])){
	$ar=$_GET['ar'];	
	$qw=mysql_query("UPDATE trains SET returned='1',arrivaltime='$date' WHERE id='$ar'");
	header('location:trainstats.php');
	}
else if(isset($_GET['dp'])){
	$dp=$_GET['dp'];
	$qwe=mysql_query("UPDATE trains SET returned='0',departuretime='$date' WHERE id='$dp'");
	header('location:trainstats.php');
	}
else if($_GET['tr']){
	$tr=$_GET['tr'];
	$c=mysql_query("SELECT * FROM ticket WHERE tid='$tr'");
	if((mysql_num_rows($c))==0){
	$err=mysql_query("DELETE FROM trains WHERE id='$tr'");
	header('location:regtrain.php');	
	}else
	echo "<body onLoad='re()'></body>";
	}

?>
<script>
function re(){
	alert("This Train Is In Operation, Wait Till Its Arrival");
	window.location='regtrain.php';
	}
</script>