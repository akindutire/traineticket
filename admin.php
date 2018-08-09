<?php
session_start();
include 'tr.php';

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Train Travel| Admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
function ld(){
	alert("Empty Field, Retry!");
	window.location='admin.php';
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
                	<h2 class="title">ADMINISTRATORS</h2>
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
                        <form action="GET.php" method="post">
                        <div class="all"><label>Your Pin</label><input type="number" style="margin-top:-20px;" name="pin" placeholder="74883GD" required/></div>
                        <div class="all"><input type="submit" name="sbpin" value="Submit"/></div>
                       	</form>
                        </div>
                      
                        
						
		        </div>
			  </div>
                
				<div class="clear"></div> 
                
			</div>
            <div class="more">
			<?php
			include 'tr.php';
			$sql=mysql_query("SELECT lkreg FROM settings WHERE id='1' and lkreg='1'");
			if(mysql_num_rows($sql)==0){
			
				echo "<a href='joinad.php' class='button'>JOIN ADMINISTRATORS</a>";
			
			}else{
				echo " ";
				}
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

    	
    	
            