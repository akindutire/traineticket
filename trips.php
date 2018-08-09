
<!DOCTYPE HTML>
<html>
<head>
<title>Train Travel| Add trip</title>
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
					<?php include 'us.php' ?>
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
                	<h2 class="title">ADD TRIP</h2>
                	<p class="modulePretext">	We offer the best train system in the world so get a TICKET! Now.</p>
				</div>
			
			
            <div id="col" style="width:auto; margin:15px 400px 15px 400px; clear:both; height:auto; border:2px solid red;">
            
            
            
         	<div class="right" style="clear:right; float:right; width:auto; margin:26px 45px 9px 5px;
             border:1px solid green; box-shadow:2px 2px 2px greenyellow; border-radius:6px; height:auto; background:floralwhite; padding:10px;
             ">
            <table border="1" cellspacing="0" cellpadding="7" style="color:green; font-family:'Browallia New'; font-size:20px;">
            	<tr><th>From</th><th>To</th><th>Seat</th><th>Amount</th></tr>
                
                <?php
			include 'tr.php';
                $sdx=mysql_query("SELECT * FROM trips");
				while($x=mysql_fetch_assoc($sdx)){
					$fr=$x['fr'];
					$to=$x['t'];
					$amount=$x['amount'];
					$type=$x['type'];
					$tripid=$x['id'];
					echo "<tr><td>$fr</td><td>$to</td><td>$type</td><td>$amount</td></tr>";
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
