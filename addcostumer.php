
<!DOCTYPE html>
<html>
<?php include("connection.php"); ?>
<?php include("header.php"); ?>
<body>
<!----start-header---->
<?php 
if(isset($_POST['add']))
{

//echo "insert into customers values('','".$_POST['firstname']."','".$_POST['Phone']."','".$_POST['State']."','".$_POST['Postcode']."','".$_POST['address']."')";
$r=mysql_query("insert into customers values('','".$_POST['firstname']."','".$_POST['Phone']."','".$_POST['address']."','".$_POST['State']."','".$_POST['Postcode']."')");
$affect=mysql_insert_id();


}
?>
<!----end-header---->
<div class="banner">
	 <!--<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li><div class="banner-bg"></div></li>
				<li><div class="banner-bg banner2"></div></li>
			 </ul>
	 </div>-->
	 <div class="container">
		 <div class="banner-sec">
			 <div class="banner-top">
						
						
										
				 <div class="clearfix"></div>
			 </div>
		 </div>
	 </div>
</div>
<!--welcome-starts--> 
<div class="welcome">
		<div class="container">
			<div class="welcome-top">
				<h1>Add Costumer Detail</h1>
				<form class="form-horizontal"  id="signup" method="post" enctype="multipart/form-data">
                    	<div class="form-group">
                        	<label class="col-sm-3">Customer Name:</label>
                        	<div class="col-sm-9">	
                            	<input type="text" class="form-control" name="firstname"/>
                            </div>
                        </div>
                        <div class="form-group">
                        	<label class="col-sm-3">Phone:</label>
                        	<div class="col-sm-9">	
                            	<input type="text" class="form-control" name="Phone"/>
                            </div>
                        </div>
                        <div class="form-group">
                        	<label class="col-sm-3">State:</label>
                        	<div class="col-sm-9">	
                            	<input type="text" class="form-control" name="State"/>
                            </div>
                        </div>
                        <div class="form-group">
                        	<label class="col-sm-3">Postcode:</label>
                        	<div class="col-sm-9">	
                            	<input type="text" class="form-control" name="Postcode"/>
                            </div>
                        </div>
                        <div class="form-group">
                        	<label class="col-sm-3">Address:</label>
                        	<div class="col-sm-9">	
                            	<textarea class="form-control" rows="10" name="address"></textarea>
                            </div>
                        </div>
                        
						
                        
                        <div class="form-group">
                        	<div class="col-sm-1 col-sm-offset-3">	
                            	<input type="submit" name="add" class="btn btn-default"/>
                            </div>
                        </div>
                        
						<?php 
						
						if(isset($affect))
{
?>
<div class="alert alert-success col-sm-9 col-sm-offset-3">
  <strong>Success!</strong> Indicates a successful or positive action.
</div>
<?php }
						
						?>
                    </form>
			</div>
			
		</div>
</div>
<!--welcome-ends-->

<!--nature-starts--> 

<!--nature-ends-->
<!--field-starts--> 

<!--field-end--> 
 <!--footer-->
<?php include("footer.php"); ?>
 <!--footer-->		

