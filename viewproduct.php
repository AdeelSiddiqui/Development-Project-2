<?php include("connection.php"); ?>
<?php 

if(isset($_REQUEST['delete_id']))
{
$query="delete from products where ProductCode='".$_REQUEST['delete_id']."'";
mysql_query($query);
}
$limit=5;
$page=$_REQUEST['page'];
//$query="select * from location limit 2,10";
 $query="SELECT * FROM `products` LIMIT ".($limit*($page-1)).",".$limit;
$r=mysql_query($query);
$num_rows=mysql_num_rows($r);
$result=array();
if($num_rows)
{
while($res=mysql_fetch_array($r))
{
	
$result[]=$res;
}
}
$count=mysql_query("select 	count(ProductCode) as count from products");
$total=mysql_fetch_array($count);
//print_r( $total);
 $aa=$total['count'];
 //echo $aa;
 $total_pages=$total['count']/$limit;
if((int)($total_pages)==(float)($total_pages))
{
 $temp=(int)($total_pages);
}
else
{
 $temp= (int)($total_pages)+1;
}
?>
<!DOCTYPE html>
<html>
<?php include("header.php"); ?>
<body>
<div class="banner">
	 
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
				<h1>View All Product</h1>
				
			</div>
			
		</div>
</div>
<div class="container">
           
  <table class="table table-bordered table-hover" style="margin-bottom:10px;">
    <thead>
      <tr>
        
		<th>Serial No</th>
		<th>Product Code</th>
        <th>Product Name</th>
        <th>Stock</th>
		<th>Price</th>
		<th>Delete</th>
		
      </tr>
    </thead>
    <tbody>
	
	<?php 
	if($result)
	{
	foreach($result as $key=>$vaalue)
	{
		
		?>
	
	<tr>
        <td>
		

		<?php if($_REQUEST['page']==1){
			echo ($page*0)+$key+1;
			}
		else
		{ echo (($page-1)*$limit)+$key+1;}	 ?></td>
		<td><?php echo $vaalue['ProductCode']; ?></td>
         <td><?php echo $vaalue['ProductName']; ?></td>
		 <td><?php echo $vaalue['QuantityInStock']; ?></td>
         <td><?php echo $vaalue['BuyPrice']; ?></td>
		 <td><a href="http://localhost/pharma/viewproduct.php?delete_id=<?php echo $vaalue['ProductCode']; ?>&page=<?php echo $page; ?>" onClick="return confirm('are you sure?')"><span  class="glyphicon glyphicon-remove"></span></a></td>
      </tr>
	<?php }
	}
	else
	{
	?>
	<tr>
        <td colspan="6"><h3><center>No Data Available</center></h3></td>
		
      </tr>
	<?php }
		?>
      
      
     
    </tbody>
  </table>
  <?php 
for($i=1;$i<=$temp;$i++)
{
//echo $i.'<br/>';
?>
<ul class="pagination">
  <li
  <?php if($_REQUEST['page']==$i)
  {
  ?>
  class="active";
  <?php } ?>>
  <a href="<?php echo url ?>/viewproduct.php?page=<?php echo $i ?>"><?php echo $i; ?></a></li>
  </ul>
<?php }
?>
</div>
<!--welcome-ends-->

<!--nature-starts--> 

<!--nature-ends-->
<!--field-starts--> 

<!--field-end--> 
 <!--footer-->
<?php include("footer.php"); ?>
 <!--footer-->		

