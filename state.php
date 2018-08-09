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
   <script>
function ld(){
	//alert("Added");
	window.location='state.php';
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
                	<h2 class="title">ADD LOCATION</h2>
                	<p class="modulePretext">	We offer the best train system in the world so get a TICKET! Now.</p>
				</div>
			<div class="section group">
				<div class="col_1_of_3 span_1_of_3"></div>
				<div class="clear"></div> 
			</div>
			
            <div id="co" style="width:900px; margin:15px 200px 15px 200px; clear:both; height:auto; border:2px solid red;">
            
            <div class="left" style="clear:left; float:left; width:400px; margin:5px 108px 9px 108px;">
            
            	<form action="state.php" method="post">
                        <div class="all"><label>Location</label><input style="margin-top:-20px;"type="text" name="st" placeholder="Ondo" required/></div>
                        <div class="all"><input type="submit" name="sbst" value="Submit"/></div>
                       	</form>
                
            </div>
            
         	<div class="right" style="clear:right; float:right; width:auto; margin:26px 154px 9px 5px;
             border:1px solid green; box-shadow:2px 2px 2px greenyellow; border-radius:6px; height:auto; background:floralwhite; padding:10px;
             ">
            <ul style="color:green; font-family:'Browallia New'; font-size:22px;">
            	
                <?php
				include 'tr.php';
                $sdl=mysql_query("SELECT * FROM location");
				while($r=mysql_fetch_assoc($sdl)){
					$k=$r['name'];
					$id=$r['id'];
					echo "<li><a>$k</a></li>";
					}
				
				?>
            </ul>
            </div>
            
            
             
            </div>
            <?php
            if(isset($_POST['sbst'])){
				$s=ucwords($_POST['st']);
				mysql_query("INSERT INTO location(name) VALUES('$s')") or die("SERVER ERROR");
				echo "<body onLoad='ld()'></body>";
				}
			
			?>
			
            
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
    	
    	
            