<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Train Travel| Registration</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script>
function ld(){
	//alert("Added");
	window.location='preview.php';
	}
function ute(){
	alert("Unsupported Image Format/Image Too Large");
	window.location='getticket.php';
	}
function nospc(){
	alert("No More Space Left To The Selected Location");
	window.location='getticket.php';
	}
function en(){
	alert("Empty Field(s)");
	window.location='getticket.php';
	}
function tr(){
	alert("Train/Seat Type Not Prepared For This Trip  ");
	window.location='getticket.php';
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
                	<h2 class="title">FILL DEATAILS</h2>
                	<p class="modulePretext">	We offer the best train system in the world so get a TICKET! Now.<b>Your Ticket Will Expire In 7 days Time</b></p>
				</div>
			
			
            <div id="col" style="width:900px; margin:15px 200px 15px 200px; clear:both; height:1px; border:2px solid red;">
            
            <div class="left" style="clear:both; float:none; width:400px; margin:5px 15px 9px 245px;">
            <?php include 'tr.php'; ?>
            	<form action="getticket.php" method="post" enctype="multipart/form-data">
                        <div class="all"><label>Name</label><input style="margin-top:-20px;" maxlength="9"type="text" name="name" placeholder="Akins" required/></div>
                         <div class="all"><label>Address</label><input style="margin-top:-20px;"type="text" name="addr" placeholder="45 George district" required/></div>
                        <div class="all"><label>Next of Kin</label><input style="margin-top:-20px;" maxlength="59"type="text" name="nk"  required/></div>
                        <div class="all"><label>Date Of Birth</label><input style="margin-top:-20px;" maxlength="59"type="date" name="dob"  required/></div>
                        <div class="all"><label>State of Origin</label><input style="margin-top:-20px;" maxlength="59"type="text" name="sto"  required/></div>
                        <div class="all"><label>Passport</label><input style="margin-top:-20px;" maxlength="9"type="file" name="ph"  required/></div>
                       
                        <div class="all"><label>From</label><select style="margin-top:-20px;" name="f">
                         <?php
                         
                		$sdl=mysql_query("SELECT * FROM location");
						while($r=mysql_fetch_assoc($sdl)){
						$k=$r['name'];
						$id=$r['id'];
						echo "<option value='$k'><a>$k</a></option>";
					}
						 ?>
                         
                         </select>
                         </div>
                        
                         
                         <div class="all"><label>To</label><select style="margin-top:-20px;" name="t">
                         <?php
                         
						 $sdt=mysql_query("SELECT * FROM location");
						while($rx=mysql_fetch_assoc($sdt)){
						$t=$rx['name'];
						$idt=$rx['id'];
						echo "<option value='$t'><a>$t</a></option>";
					}
						 ?>
                         
                         </select>
                         </div>
                         
                        <div class="all"><label>Seat</label><select style="margin-top:-20px;" name="seat">
                        
                         
						<option value='Regular'>Regular</option>
                        <option value='First Class'>First Class</option>
						 
                         </select>
                         </div>
                         
                        
                        <div class="all"><input type="submit" name="sbticket" value="Submit"/></div>
                       	</form>
                
            </div>
            <?php 
			include 'tr.php';
			if(isset($_POST['sbticket'])){
				
			if(!empty($_POST['dob']) && !empty($_POST['sto'])){	
					$available_extensions=array('jpg','jpeg','png','gif','ico');
					$max_size=912000000;
					$name=$_FILES['ph']['name'];
					$size=$_FILES['ph']['size'];
					$tmp=$_FILES['ph']['tmp_name'];
					$ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
					if((in_array($ext,$available_extensions)) || ($size<=$max_size)){
						$path='imgu/';
						//$dblen=strlen($name);
					
						$sna=mktime().$name;
						
							move_uploaded_file($tmp,$path.$sna);
					}else{
						echo '<body onload="ute()"></body>';
							}
							
				
				$seat=strtoupper($_POST['seat']);
				$state=ucwords($_POST['sto']);
				$name=$_POST['name'];
				$addr=$_POST['addr'];
				$dob=$_POST['dob'];
				$nk=$_POST['nk'];
				$t=$_POST['t'];
				$f=$_POST['f'];
					
					$date=date('h:i',time());
					
					$sq=mysql_query("SELECT * FROM trips WHERE fr='$f' and t='$t' and type='$seat'");
					$sq_as=mysql_fetch_assoc($sq);
					$amt=$sq_as['amount'];
					
					if(mysql_num_rows($sq)==1){
					
					
					$sqt=mysql_query("SELECT * FROM trains WHERE fr='$f' and t='$t'");
					$sq_ast=mysql_fetch_assoc($sqt);
					$t_idr=$sq_ast['id'];
					$tn=$sq_ast['tid'];
					$capacity=($sq_ast['capt']);
					echo $capacity;
					$_SESSION['tn']=$tn;
					$sd=mysql_query("SELECT * FROM ticket WHERE t_id='$t_idr'");
					
					if((mysql_num_rows($sd))<=$capacity){
					mt_srand((double)microtime() *1000000);
					$pin=mt_rand(1000,9480).mt_rand(1034,9992);
					
					sscanf($date,"%d:%d",$h,$m);
					$stat=$h*3600+$m*60;
					$endtime=($stat)*7;
					$timeleft=$endtime-$stat;
					$r=date('d -M -Y, h:i a');
					$_SESSION['dt']=$r;
						
					mysql_query("INSERT INTO ticket(name,addr,nk,dob,sto,ph,checked,
					t_id,stattime,endtime,timeleft,Fr,t,seat,PND,amt,realt) 
					VALUES('$name','$addr','$nk','$dob','$state','$sna','0','$t_idr','$stat','$endtime',
					'$timeleft','$f','$t','$seat','$pin','$amt','$r')") or die("SERVER ERROR");
					$xc=mysql_insert_id($link);
					$_SESSION['ls']=$xc;
					echo "<body onLoad='ld()'></body>";
				
					}else
					echo "<body onLoad='nospc()'></body>";
					}else
					echo "<body onLoad='tr()'></body>";
						
			}else
			echo "<body onLoad='en()'></body>";
		}
			?>
            
            
             
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

  
     	
    	
            