<!DOCTYPE html>
<html>
<?php include("connection.php"); ?>
<?php include("header.php"); ?>
<body>
<!----start-header---->
<?php 
if(isset($_POST['add']))
{

//echo "insert into products values('".$_POST['ProductCode']."','".$_POST['ProductName']."','".$_POST['ProductDescription']."','".$_POST['QuantityInStock']."','".$_POST['BuyPrice']."')";
mysql_query("insert into employees values('','".$_POST['EmployeeName']."')");

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
				<h1>Add Employee Detail</h1>
				<form class="form-horizontal"  id="signup" method="post" enctype="multipart/form-data">
                    	<div class="form-group">
                        	<label class="col-sm-3">Employee Name</label>
                        	<div class="col-sm-9">	
                            	<input type="text" class="form-control" name="EmployeeName"/>
                            </div>
                        </div>
                        
                       
                        
                        <div class="form-group">
                        	<div class="col-sm-1 col-sm-offset-3">	
                            	<input type="submit" name="add" class="btn btn-default"/>
                            </div>
                        </div>
                        
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

