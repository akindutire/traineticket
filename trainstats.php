<?php
session_start();
if(!empty($_SESSION['h'])){
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Train Travel| Train Status</title>
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
                	<h2 class="title">TRAIN STATUS</h2>
                	<p class="modulePretext">	We offer the best train system in the world so get a TICKET! Now.</p>
				</div>
			<div class="section group">
				<div class="col_1_of_3 span_1_of_3"></div>
				<div class="clear"></div> 
			</div>
			
            <div id="col" style="width:900px; margin:15px 200px 15px 200px; clear:both; height:1px; border:2px solid red;">
            
           
         	<div class="right" style="clear:both; float:none; width:auto; margin:26px 45px 9px 5px;
             border:1px solid green; box-shadow:2px 2px 2px greenyellow; border-radius:6px; height:auto; background:floralwhite; padding:10px;
             ">
            <table border="1" cellspacing="0" cellpadding="7" style="color:green; font-family:'Browallia New'; font-size:20px;">
            	<tr><th>TrainID</th><th>From</th><th>To</th><th>Has Departed</th><th>Has Arrived</th><th>Departure Time</th><th>Arrival Time</th><th>Capacity</th></tr>
                
                <?php
			include 'tr.php';
                $sdx=mysql_query("SELECT * FROM trains");
				while($x=mysql_fetch_assoc($sdx)){
					$trd=ucwords($x['tid']);
					$frm=ucwords($x['fr']);
					$t=ucwords($x['t']);
					$retd=$x['returned'];
					$dpt=$x['departuretime'];
					$art=$x['arrivaltime'];
					$capacity=ucwords($x['capt']);
					
					$id=$x['id'];
					echo "<tr><td>$trd</td><td>$frm</td><td>$t</td><td><a href='process.php?dp=$id'><img src='images/det.png' width='20' height='20'></a></td><td><a href='process.php?ar=$id'><img src='images/ard.png' width='20' height='20'></a></td><td>$dpt</td><td>$art</td><td>$capacity</td>
					</tr>";
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
    	
    
    	
    	
            