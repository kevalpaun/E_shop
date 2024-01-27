<?php
 include "header.php";
?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Products
    </div>
    <div class="table-responsive">
	<table class="table table-striped b-t b-light">

<?php
	$conn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($conn,"ecommerce");
	$qry = "SELECT * FROM Products";
	$result=mysqli_query($conn,$qry);
	echo "<table border=2>
	<tr>
		<th>PRODUCT ID</th>
		<th>CATEGORY ID</th>
		<th>BRAND</th>
		<th>TITLE</th>
		<th>PRICE</th>
		<th>DESCRIPTION</th>
		<th>IMAGE</th>
		<th>EDIT</th>
		<th>DELETE</th>
	</tr>";
	if(mysqli_num_rows($result) > 0)
		while($row=mysqli_fetch_array($result))
		{
			 echo "<tr><td>". $row[0]. "</td>
			 <td> ". $row[1]. "</td>
			 <td>". $row[2]. "</td>
			  <td>". $row[3]. "</td> 
			   <td>". $row[4]. "</td>
			    <td>". $row[5]. "</td>
			 <td>
			 	<img src='upload/".$row[3]."' height=100 width=100/>
			 </td>
			 <td><a href='edit_product.php?Product_id=". $row[0]. "'><img alt='Edit' width='30px' height='30px' src='images/edit.png' /></a></a></td>
			 <td><a href='delete_product.php?Product_id=". $row[0]. "'><img alt='Delete' width='35px' height='35px' src='images/delete.png' /></a></td>
			 </tr>";
		}
	else
		echo "<tr><td colspan=7>No Rows Available to Display.</td></tr>";
	echo "<tr><td colspan=7>". mysqli_num_rows($result). " row(s) selected.</td></tr>";
	echo "</table>";
?>
<p>Wanna Insert a New Produt??? <a href="insert_product.php">Click Here</a></p>
</body>
</html>
