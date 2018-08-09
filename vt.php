<?php
session_start();
include 'tr.php';

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Train Travel| Ticket</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
					<?php include 'as.php'; ?>
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
                	<h2 class="title">VERIFY TICKET</h2>
                	<p class="modulePretext"></p>
				</div>
			<div class="section group">
				<div class="col_1_of_3 span_1_of_3"></div>
				<div class="clear"></div> 
			</div>
			<div class="section group" style="margin-left:480px; width:auto;">
			  <div class="col_1_of_3 span_1_of_3" style="width:auto;">
			    <div class="grid_img">
						
                        
                        <div class="hover_img">
                        <form action="sa.php" method="post">
                        <div class="all"><label>Ticket</label><input  style="margin-top:-20px; " type="text" name="pisn" placeholder="7488367" maxlength="8" required/></div>
                        <div class="all"><input type="submit" name="sbtin" value="Verify"/></div>
                       	</form>
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

    	
    	
            