<?php include("connection.php");
if(isset($_POST['add'])){
	//echo "insert into products values('".$_POST['ProductCode']."','".$_POST['ProductName']."','".$_POST['ProductDescription']."','".$_POST['QuantityInStock']."','".$_POST['BuyPrice']."')";
	mysql_query("insert into products values('".$_POST['ProductCode']."','".$_POST['ProductName']."','".$_POST['ProductDescription']."','".$_POST['QuantityInStock']."','".$_POST['BuyPrice']."')");
	echo $affect=mysql_affected_rows();
	//header("location:".$_SERVER['PHP_SELF'].'?flag='.$affect);
}
?>
<!DOCTYPE html>
<html>
<?php include("header.php"); ?>
<body>
<!----start-header---->
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
				<h1>Add Product Detail</h1>
				<form class="form-horizontal"  id="signup" method="post" enctype="multipart/form-data">
                    	<div class="form-group">
                        	<label class="col-sm-3">Product Code:</label>
                        	<div class="col-sm-9">	
                            	<input type="text" class="form-control" name="ProductCode"/>
                            </div>
                        </div>
                        <div class="form-group">
                        	<label class="col-sm-3">Product Name:</label>
                        	<div class="col-sm-9">	
                            	<input type="text" class="form-control" name="ProductName"/>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<label class="col-sm-3">Quantity In Stock:</label>
                        	<div class="col-sm-9">	
                            	<input type="text" class="form-control" name="QuantityInStock"/>
                            </div>
                        </div>
                        <div class="form-group">
                        	<label class="col-sm-3">Buy Price:</label>
                        	<div class="col-sm-9">	
                            	<input type="text" class="form-control" name="BuyPrice"/>
                            </div>
                        </div>
                        
						<div class="form-group">
                        	<label class="col-sm-3">Product Description:</label>
                        	<div class="col-sm-9">	
							<textarea class="form-control" rows="10" name="ProductDescription"></textarea>
                            	
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<div class="col-sm-1 col-sm-offset-3">	
                            	<input type="submit" name="add" class="btn btn-default"/>
                            </div>
                        </div>
                        <?php 
						
						
							switch($affect){
								
								case -1:{
									?>
									<div class="alert alert-danger col-sm-9 col-sm-offset-3">
									  <strong>warning!</strong> Duplicate Entry.
									</div>
									<?php
									}break;
								case 1:{
									?>
									<div class="alert alert-success col-sm-9 col-sm-offset-3">
									  <strong>sccesss!</strong> Indicates a successful or positive action.
									</div>
									<?php
									}break;
								
							}
						
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

