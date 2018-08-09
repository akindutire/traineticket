<!DOCTYPE HTML>
<html>
<head>
<title>Train Travel| Ticket Registration Review</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
function ld(){
	alert("Empty Field(s), Retry!");
	window.location='joinad.php';
	}
function ut(){
	alert("Unsupported Image Format/ Image Too Large");
	window.location='joinad.php';
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
					<?php include 'us.php'; ?>
		    </div>
			<div class="clear"></div> 
		</div>
	</div>
</div>
<!------End Header ------------>
		<!------ Slider ------------>
		
   		<!------End Slider ------------>
	<!------Content ------------>
	    <div class="main">
			<div class="wrap">
				<div class="module-title">
                	<h2 class="title">INFORMATION REVIEW</h2>
                	<p class="modulePretext"></p>
				</div>
			
						<?php
session_start();
include 'tr.php';
$id=$_SESSION['ls'];
$sql=mysql_query("SELECT * FROM ticket WHERE id='$id'");
$sd=mysql_fetch_assoc($sql);
$n=$sd['name'];
$amt=$sd['amt'];
$a=$sd['addr'];
$ph=$sd['ph'];
$seat=$sd['seat'];
$stime=$sd['stattime'];
$etime=$sd['endtime'];
$frm=$sd['Fr'];
$t=$sd['t'];
$pin=$sd['PND'];
$amt=$sd['amt'];
$train=$_SESSION['tn'];
$rt=$_SESSION['dt'];



?>
			
            	 <div id="col" style="width:900px; margin:15px 200px 15px 200px; clear:both; height:1px; border:2px solid red;">
                        
                        <div class="right" style="clear:both; float:none; width:auto; margin:26px 45px 9px 5px;
             border:1px solid green; box-shadow:2px 2px 2px greenyellow; border-radius:6px; height:auto; background:floralwhite; padding:10px;
             ">
                        <table cellpadding="10" cellspacing="0" style="color:darkgreen; font-family:'Browallia New'; font-style:bold; margin-left:245px; font-size:20px;">
                        <tr><td>Your Train</td><td><big> <?php echo $train; ?></big></td></tr>
                       <tr><td></td><td> <?php echo "<img src='imgu/$ph' width='100' height='100'>"; ?></td></tr>
                        <?php echo "<tr><td>Name</td><td><b>$n</b></td></tr> 
                        <tr><td>Address</td><td><b>$a</b></td></tr>
						<tr><td>Seat Type</td><td><b>$seat</b></td></tr>
						<tr><td>From</td><td><b>$frm</b></td></tr>
						<tr><td>To</td><td><b>$t</b></td></tr>
						<tr><td>Issued</td><td><b>$rt</b></td></tr>
						<tr><td>Expires</td><td><b>IN 7 DAYS TIME</b></td></tr>
						<tr><td>Pin</td><td><b>$pin</b></td></tr>
						<tr><td>Amount</td><td><b>$amt</b></td></tr>
						";
						
						?>
                        
 						
						                     
                       
                       
                        </table>
                        
                       <p style="text-align:center;"><button onClick="window.print()">Print</button></p>
                        <p>Please It is Compulsory You Copy Your Pin For Check</p>
                        </div>
                        
						
		       </div>
			 
                </div>
				<div class="clear"></div> 
                
			</div>
            <div class="more">
			<?php
			
			session_write_close();
			?>
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

    	
    	
            