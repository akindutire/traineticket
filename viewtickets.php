<?php
session_start();
if(!empty($_SESSION['h'])){
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Train Travel| View Ticket</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script>
function ld(){
	//alert("Added");
	window.location='addtrip.php';
	}
function ald(){
	alert("Selection Already Exist");
	window.location='addtrip.php';
	}

</script>
    <style>
@import "css/forms.css";
</style>

</head>
<body>
<!------ Header ------------>
<div class="wrap-box"></div>
<div class="header">	
		<div class="header-top">
				<div class="wrap">
						<div class="top-header-left">
							<p>Help line- +994-8894-3780</p>
						</div>
						<div class="right-left"></div>
						<div class="clear"> </div>
			   </div>
	    </div>
	   <div class="header-bottom">
		  <div class="wrap">
			<div class="logo">
				<a href="index.html"><img src="images/lg.jpg" alt="" width="237" height="36"/></a>
			</div>
			<div class="top-nav">
					<?php include 'as.php' ?>
		    </div>
			<div class="clear"></div> 
		</div>
	</div>
</div>
<!------End Header ------------>
		<!------ Slider ------------>
		<div class="slider">
		  <div class="slider-wrapper theme-default">
	            
	        </div>
	    </div>
   		<!------End Slider ------------>
	<!------Content ------------>
	    <div class="main">
			<div class="wrap">
				<div class="module-title">
                	<h2 class="title">VIEW TICKETS</h2>
                	<p class="modulePretext">	We offer the best train system in the world so get a TICKET! Now.</p>
				</div>
			<div class="section group">
				<div class="col_1_of_3 span_1_of_3"></div>
				<div class="clear"></div> 
			</div>
			
            <div id="col" style="width:900px; margin:15px 200px 15px 200px; clear:both; height:1px; border:2px solid red;">
            
            <?php 
			include 'tr.php';
			if(isset($_POST['sbtrip'])){
				$am=strtoupper($_POST['amt']);
				$amt="N".$am;
				$seat=strtoupper($_POST['seat']);
				$t=$_POST['t'];
				$f=$_POST['f'];
				$ck=mysql_query("SELECT * FROM trips WHERE fr='$f' and t='$t' and type='$seat'");
				if((mysql_num_rows($ck))==0){
				mysql_query("INSERT INTO trips(fr,t,amount,type) 
				VALUES('$f','$t','$amt','$seat')") or die("SERVER ERROR");
				echo "<body onLoad='ld()'></body>";
				}else
				echo "<body onLoad='ald()'></body>";
				}
			
			
			?>
            
         	<div class="right" style="clear:both; float:none; width:auto; margin:26px 45px 9px 5px;
             border:1px solid green; box-shadow:2px 2px 2px greenyellow; border-radius:6px; height:auto; background:floralwhite; padding:10px;
             ">
            <table border="1" cellspacing="0" cellpadding="7" style="color:green; font-family:'Browallia New'; font-size:20px;">
            	<tr><th>Name</th><th>From</th><th>To</th><th>Seat</th><th>Address</th><th>Next of Kin</th><th>Issued On</th><th>Status</th><th>TicketID</th></tr>
                
                <?php
			include 'tr.php';
                $sdx=mysql_query("SELECT * FROM ticket");
				while($x=mysql_fetch_assoc($sdx)){
					$name=ucwords($x['name']);
					$address=ucwords($x['addr']);
					$nk=ucwords($x['nk']);
					$dob=ucwords($x['dob']);
					$sto=ucwords($x['sto']);
					$photo=$x['ph'];
					
					$checked=$x['checked'];
					$tid=$x['t_id'];
					
					$stattime=$x['stattime'];
					$endtime=$x['endtime'];
					$timeleft=$x['timeleft'];
					$toi=strtoupper($x['t']);
					$fromi=strtoupper($x['Fr']);
					$seat=ucwords($x['seat']);
					$pin=$x['PND'];
					$r=$x['realt'];
					$ticketid=$x['id'];
					if($checked==0){
					echo "<tr><td><img src='imagu/$photo'>
					&nbsp;$name</td><td>$fromi</td><td>$toi</td><td>$seat</td><td>$address</td><td>$nk</td>
					<td>$r</td><td>Not Passed</td><td>$pin</td></tr>";
					}else{
					echo "<tr><td><img src='imagu/$photo'>
					&nbsp;$name</td><td>$fromi</td><td>$toi</td><td>$seat</td><td>$address</td><td>$nk</td>
					<td>$r</td><td>Passed</td><td>$pin</td></tr>";
						
						}
					}
				
				?>
            </table>
            </div>
            
            
             
            </div>
            
			
            
			</div>
                
				<div class="clear"></div> 
                
			</div>
			<div class="more">
				
			</div>
			<div class="content-bottom"></div>
	  <!------End Content ------------>
    <!------footer ------------>
    <div class="footer">
       <div class="footer-top">
         <div class="clear"></div> 
		</div>
		<div class="copy">
			<p>&nbsp;</p>
		</div>
	</div>
   </div>
</div>
</body>
</html>
<?php
}else{
	header('location:admin.php');
	}

?>
    	
    
    	
    	
            