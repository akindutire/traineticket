<?php
session_start();
include 'tr.php';
$s=mysql_query("SELECT * FROM trains WHERE returned='1'");
while($r=mysql_fetch_assoc($s)){
	$sid=$r['id'];
	echo $sid;
$sql=mysql_query("DELETE FROM ticket WHERE t_id='$sid' and checked='1'");

}

$y=mysql_query("SELECT * FROM ticket");
while($xr=mysql_fetch_assoc($y)){
	$st=$xr['stattime'];
	$et=$xr['endtime'];
	$md=$xr['id'];
	$lft=abs($et-$st);
	
	if($lft<1){
$sqlxx=mysql_query("DELETE FROM ticket WHERE id='$md'");
		}else
	header('location:viewtickets.php');		
	}
header('location:viewtickets.php');
?>