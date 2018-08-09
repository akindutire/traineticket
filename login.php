<?php
session_start();
if(!empty($_SESSION['h'])){
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Train Travel| Admin Home</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
                	<h2 class="title">Our  offers</h2>
                	<p class="modulePretext">	We offer the best train system in the world so get a TICKET! Now.</p>
				</div>
			<div class="section group">
				<div class="col_1_of_3 span_1_of_3"></div>
				<div class="clear"></div> 
			</div>
			<div class="section group">
				<div class="col_1_of_3 span_1_of_3">
				  <div class="grid_img">
						<div class="hover_img">
						  <img src="images/trains-train-stations-tilt-shift-vehicles-fresh-hd-wallpaper.jpg" width="406" height="221" alt=""/>
						</div>
						<p class="desc"><a href="#">Train Park.</a></p>
				   </div>
				</div>
                
                
                <div class="col_1_of_3 span_1_of_3">
				  <div class="grid_img">
						<div class="hover_img">
						  <img src="images/milano-centrale-train-station-platform-26599236.jpg" width="406" height="221" alt=""/>
						</div>
						<p class="desc"><a href="#">Kaduna Avenue.</a></p>
				   </div>
				</div>
                
                <div class="col_1_of_3 span_1_of_3">
				  <div class="grid_img">
						<div class="hover_img">
						  <img src="images/pic16.jpg" width="406" height="221"  alt=""/>
						</div>
						<p class="desc"><a href="#">Interior Design of Train.</a></p>
				   </div>
				</div>
                
				<div class="clear"></div> 
                
			</div>
			<div class="more">
				<a href="interm.php" class="button">TICKETS</a>
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
    	  	
            