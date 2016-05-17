<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Medicom a Medical Category Flat Bootstarp responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Medicom Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo "" ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-2.1.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-FormValidation/bootstrap-FormValidation-1.js"></script>
<script src="js/bootstrap-FormValidation/bootstrap-FormValidation-2.js"></script>
<script src="js/bootstrap-FormValidation/validation-script.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<style>
.navbar-inverse {
    background-color: #E34554 !important;
    border-color: #E34554 !important;
}
.navbar-inverse .navbar-nav > li > a {
    color: white !important;
}
</style>
<?php
// case-insensitive constant name
define("url", "http://rglabs.net/pharma", true);

?> 

	<!-- banner Slider starts Here -->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: false,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
</head>

<body>

<nav class="navbar navbar-inverse" style="margin-bottom:0px !important">
 <div class="container-fluid">
   <div class="navbar-header">
    <a href="" class="navbar-brand">Pharma</a>
   </div>
   <div>
   <ul class="nav navbar-nav">
   <li class="active"><a href="<?php echo url; ?>">Home</a></li>
   <li class="dropdown">
   <a href="" class="dropdown-toggle" data-toggle="dropdown">Coustumer
    <span class="caret"></span>
   </a>
   <ul class="dropdown-menu">
    <li><a href="<?php echo url; ?>/addcostumer.php">Add Coustumer </a></li>
	<li><a href="<?php echo url; ?>/viewcostumer.php?page=1">View Coustumer</a></li>
	
   </ul>
   </li>
   
   <li class="dropdown">
   <a href="" class="dropdown-toggle" data-toggle="dropdown">Product
    <span class="caret"></span>
   </a>
   <ul class="dropdown-menu">
    <li><a href="<?php echo url; ?>/addproduct.php">Add Product </a></li>
	<li><a href="<?php echo url; ?>/viewproduct.php?page=1">View All Product</a></li>
	
   </ul>
   </li>
   <li class="dropdown">
   <a href="" class="dropdown-toggle" data-toggle="dropdown">Employee
    <span class="caret"></span>
   </a>
   <ul class="dropdown-menu">
    <li><a href="<?php echo url; ?>/addemployee.php">Add Employee </a></li>
	<li><a href="<?php echo url; ?>/viewemployee.php?page=1">View All Employee</a></li>
	
   </ul>
   </li>
   <li><a href="<?php echo url; ?>/addorder.php">Order</a></li>
   <li><a href="<?php echo url; ?>/report.php">Report</a></li>
    
   </ul>
   </div>
 </div>
</nav>
</body>
</html>