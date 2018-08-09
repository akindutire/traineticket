<?php
session_start();
include 'tr.php';
if(isset($_POST['sbadd'])){
				
				if(!empty($_POST['address']) && !empty($_POST['name'])){	
					$available_extensions=array('jpg','jpeg','png','gif','ico');
					$max_size=912000000;
					$name=$_FILES['ph']['name'];
					$size=$_FILES['ph']['size'];
					$tmp=$_FILES['ph']['tmp_name'];
					$ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
					if((in_array($ext,$available_extensions)) || ($size<=$max_size)){
						$path='imga/';
						//$dblen=strlen($name);
					
						$sna=mktime().$name;
						
							move_uploaded_file($tmp,$path.$sna);
					}else{
						echo '<body onload="ut()"></body>';
							}
							mt_srand((double)microtime() *1000000);
							$n=$_POST['name'];
							$a=$_POST['address'];
							$hi=mt_rand(1000,9999).mt_rand(1021,9051);
							$h=md5($hi);
						$sql=mysql_query("INSERT INTO admin(name,hash,address,pix) VALUES('$n','$h','$a','$sna')");	
						$_SESSION['g']=mysql_insert_id($link);
						$_SESSION['text']=$hi;
						header('location:verify.php');					
				}else{
					echo '<body onload="ld()"></body>';
					}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Train Travel| Admin Registration</title>
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
                	<h2 class="title">ADMIN REGISTRATION</h2>
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
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="all"><label>Name</label><input style="margin-top:-20px;" type="text" name="name" placeholder="Akin" required/></div>
                        <div class="all"><label>Address</label><input  style="margin-top:-20px;" type="text" name="address" placeholder="26 idahaya street, kuje." required/></div>
                        <div class="all"><label>Photo</label><input style="margin-top:-20px;" type="file" name="ph"/></div>
                        
                        <div class="all"><input type="submit" name="sbadd" value="Submit"/></div>
                       	</form>
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

    	
    	
            