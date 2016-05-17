<?php
$servername = "localhost";
$username = "rglabsn_pharma";
$password = "9785393939";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn = mysqli_connect($servername,$username,$password,"rglabsn_pharma");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report</title>
<style>th{ background:#000; color:#fff;}</style>
</head>
<?php include("header.php"); ?>

<body>
<h2 style="text-align:center;"> Report</h2>
 <fieldset id="fieldset" style="width:800px; vertical-align:central; margin:0 auto;">
                        <legend>Report</legend>
                        <div style="float:right;">View: <a href="?range=month">Monthly</a>  | <a href="?range=week">Weekly</a></div><br />
<br />
<br />
<br />

                        <table class="ff_table" border="1px;" cellpadding="5px" cellspacing="0px;">
                            <tbody>
                          
                            	
                                <tr>
                                    <th style="width:145px;">Product code</th>
                                    <th style="width:145px;">Product Name</th>
                                    <th style="width:145px;">Quantity in Stock</th>
                                    <th style="width:145px;" >Profit</th>
                                    <th style="width:145px;">Employee Id</th>
                                   
									</tr>
                                    
                                   <?php  
								   $range = 1;
								   $range=$_GET['range'];
								   function rangeMonth($datestr) {
										date_default_timezone_set(date_default_timezone_get());
										$dt = strtotime($datestr);
										$res['start'] = date('Y-m-d', strtotime('first day of this month', $dt));
										$res['end'] = date('Y-m-d', strtotime('last day of this month', $dt));
										return $res;
										}
									
									  function rangeWeek($datestr) {
										date_default_timezone_set(date_default_timezone_get());
										$dt = strtotime($datestr);
										$res['start'] = date('N', $dt)==1 ? date('Y-m-d', $dt) : date('Y-m-d', strtotime('last monday', $dt));
										$res['end'] = date('N', $dt)==7 ? date('Y-m-d', $dt) : date('Y-m-d', strtotime('next sunday', $dt));
										return $res;
										}
									if($range=="month"){
										$between = rangeMonth(date('Y-m-d', time())); 
									 $where = "where (orders.OrderDate BETWEEN '".$between['start']." 00:00:01' AND '".$between['end']." 00:00:00')";
									}else if($range=="week"){
										$between = rangeWeek(date('Y-m-d', time())); 
									 $where = "where (orders.OrderDate BETWEEN '".$between['start']." 00:00:00' AND '".$between['end']." 00:00:00')";

										 }
										 else{
											 
											 $where ="where 1";
											 }
											// echo "select * from orderdetails left join orders on orderdetails.OrderNumber = orders.OrderNumber ".$where;
									
 
								    $query  = mysqli_query($conn,"select * from orderdetails left join orders on orderdetails.OrderNumber = orders.OrderNumber ".$where);
								   while($row = mysqli_fetch_array($query)) {  
								   
								   	$product_id = $row['ProductCode'] ;
								   	$product_query  = mysqli_query($conn,"select * from products where ProductCode='".$product_id."'" );
									$product_data = mysqli_fetch_array($product_query);
									$product_query  = mysqli_query($conn,"select * from products where ProductCode='".$product_id."'" );
									$product_data = mysqli_fetch_array($product_query);
								   	
								   
								   ?>
                                   <tr>
                                    <td>
                                      <?php echo $row['ProductCode'] ?>      
                                    </td>
                                     <td>
									  <?php echo $product_data['ProductName'] ?>       
                                    </td>
                                     <td>
                                       <?php echo $product_data['QuantityInStock'] ?>        
                                    </td>
                                     <td>
                                          <?php echo ($row['PriceEach'] - $product_data['BuyPrice'])*($row['QuantityOrdered']); ?>   
                                    </td>   
                                     <td>
                                        <?php echo $row['EmployeeID'] ?>      
                                    </td>
                                   
                                </tr> <?php }  ?>
								
								


</body>
</html>