<?php
session_start();
include 'tr.php';
$p=(trim($_POST['pisn']));
$sql=mysql_query("SELECT * FROM ticket WHERE PND='$p'");
if(mysql_num_rows($sql)==1){
	mysql_query("UPDATE ticket SET checked='1' WHERE PND='$p'");
	echo '<body onLoad="vld()"></body>';
	
	}else{
		
		echo '<body onLoad="ld()"></body>';
		}
?>
<script>
function ld(){
	alert("Not Passed , Pin Incorrect, Retry!");
	window.location='vt.php';
	}
function vld(){
	alert("Passed And Validated");
	window.location='vt.php';
	}
</script>