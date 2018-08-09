<?php
session_start();
include 'tr.php';
$id=$_SESSION['g'];
$sql=mysql_query("SELECT * FROM admin WHERE id='$id'");
$sd=mysql_fetch_assoc($sql);
$n=$sd['name'];
$a=$sd['address'];
$p=$sd['pix'];
$h=$_SESSION['text'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Train Travel| Admin Registration Review</title>
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
			<div class="section group">
				<div class="col_1_of_3 span_1_of_3"></div>
				<div class="clear"></div> 
			</div>
			<div class="section group" style="margin-left:480px; width:auto;">
			  <div class="col_1_of_3 span_1_of_3" style="width:auto;">
			    <div class="grid_img">
						
                        
                        <div class="hover_img" style="border:0px;">
                       <p style="text-align:center;"><?php echo "<img src='imga/$p' width='60' height='60'>"; ?></p>
                       <p style="color:navy; font-size:17px; font-family:berlin sans fb; margin-left:20px; text-align:center;"><?php echo $n; ?></p>
                       <p style="color:navy; font-size:17px; font-family:berlin sans fb; margin-left:20px; text-align:center;"><?php echo $a; ?></p>
                       <p style="color:navy; font-size:17px; font-family:berlin sans fb; margin-left:20px; text-align:center;"><?php echo $h; ?></p>
                       <p style="text-align:center;"><button onClick="window.print()">Print</button></p>
                        <p>Please It is Compulsory You Copy Your Pin</p>
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

    	
    	
            