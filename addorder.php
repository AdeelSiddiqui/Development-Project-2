<?php include("connection.php"); ?>
<?php 


$r=mysql_query("select * from customers");
while($res=mysql_fetch_array($r))
{

$result[]=$res;

} 

$rr=mysql_query("select * from employees");
while($ress=mysql_fetch_array($rr))
{

$results[]=$ress;

}

$rrr=mysql_query("select * from products");
while($resss=mysql_fetch_array($rrr))
{
	//echo '<pre>';
//print_r($resss);
//echo '</pre>';
$resultss[]=$resss;

}
if(isset($_POST['add']))
{
	 "insert into orders values('',NOW(),".$_POST['Order']."','".$_POST['Required']."','".$_POST['Shipped']."',1,'".$_POST['Costumername']."','".$_POST['Employeename']."')";

mysql_query("insert into orders values('',NOW(),'".$_POST['Required']."','".$_POST['Shipped']."','1','".$_POST['Costumername']."','".$_POST['Employeename']."')"

);
$last= mysql_insert_id();
mysql_query("insert into orderdetails values('".$last."','".$_POST['productname']."','".$_POST['Quantity']."','".$_POST['price']."')");
$affect=mysql_affected_rows();
header("location:".$_SERVER['PHP_SELF'].'?flag='.$affect);
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
			<h1>Give A Order</h1>
			<form class="form-horizontal"  id="signup" method="post" enctype="multipart/form-data">
				<!--<div class="form-group">
					<label class="col-sm-3">Order Date:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="Order"/>
					</div>
				</div>-->
				<div class="form-group">
					<label class="col-sm-3">Required Date:</label>
					<div class='col-sm-9'>
						<div class='input-group date' id='datetimepicker1'>
							<input type='text' class="form-control" name="Required" />
							<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span> </div>
					</div>
					<!--<div class="col-sm-9">	
                            	<input type="text" class="form-control" placeholder="YYYY-DD-MM" name="Required"/>
                            </div>--> 
				</div>
				<div class="form-group">
					<label class="col-sm-3">Shipped Date:</label>
					<div class='col-sm-9'>
						<div class='input-group date' id='datetimepicker2'>
							<input type='text' class="form-control" name="Shipped" />
							<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span> </div>
					</div>
					<script type="text/javascript">
            jQuery(function ($) {
                $('[id*=datetimepicker]').datetimepicker({format: 'YYYY-MM-DD HH:mm:ss'});
				 
            });
        </script> 
					<!--<div class="col-sm-9">	
                            	<input type="text" class="form-control" name="Shipped"/>
                            </div>--> 
				</div>
				<div class="form-group">
					<label class="col-sm-3">Costumer Name:</label>
					<div class="col-sm-9">
						<select class="form-control" name="Costumername">
							<?php 
								foreach($result as $key=>$value)
								{?>
							<option value="<?php echo $value['CustomerID'] ?>"><?php echo $value['CustomerName'] ?></option>
							<?php }
								
								?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3">Employee Name:</label>
					<div class="col-sm-9">
						<select class="form-control" name="Employeename">
							<?php 
								foreach($results as $key=>$value)
								{?>
							<option value="<?php echo $value['EmployeeID'] ?>"><?php echo $value['EmployeeName'] ?></option>
							<?php }
								
								?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3">Product Name:</label>
					<div class="col-sm-9">
						<select class="form-control" name="productname">
							<option value="0">Select Product</option>
							<?php 
								foreach($resultss as $key=>$value)
								{?>
							<option data-producttrigger="<?php echo $value['BuyPrice'] ?>" value="<?php echo $value['ProductCode'] ?>"><?php echo $value['ProductName'] ?></option>
							<?php }
								
								?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3">Quantity </label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="Quantity"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3">Price Each</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="price"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-1 col-sm-offset-3">
						<input type="submit" name="add" class="btn btn-default"/>
					</div>
				</div>
				 <?php 
						
						if(isset($_GET['flag'])){
							switch($_GET['flag']){
								
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
