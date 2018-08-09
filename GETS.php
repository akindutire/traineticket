<?php
session_start();
include 'tr.php';
$p=(trim($_POST['pisn']));
$sql=mysql_query("SELECT * FROM ticket WHERE PND='$p'");
if(mysql_num_rows($sql)==1){
	echo '<body onLoad="vld()"></body>';
	header('location:vt.php');
	}else{
		
		echo '<body onLoad="ld()"></body>';
		}
?>
<script>
function ld(){
	alert("Not Passed , Pin Incorrect, Retry!");
	<!--window.location='vt.php';-->
	}
function vld(){
	alert("Passed And Validated");
	<!--window.location='vt.php';-->
	}
</script>