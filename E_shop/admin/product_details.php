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
	$db=mysqli_select_db($conn,"project_db");
	$qry = "SELECT * FROM tb_product";
	$result=mysqli_query($conn,$qry);
	echo "<table border=2>
	<tr>
		<th>PRODUCT ID</th>
		<th>PRODUCT NAME</th>
		<th>CATEGORY ID</th>
		<th>IMAGE</th>
		<th>IMAGE</th>
		<th>IMAGE</th>
		<th>PRICE</th>
		<th>stock</th>
		<th>Warranty Time</th>
	
		<th>DELETE</th>
	</tr>";
	if(mysqli_num_rows($result) > 0)
		while($row=mysqli_fetch_array($result))
		{
			 echo "<tr><td>". $row[0]. "</td>
			 <td> ". $row[1]. "</td>
			 <td>". $row[2]. "</td>
			 <td>
			 	<img src='upload/".$row[3]."' height=100 width=100/>
			 </td>
			 <td> <img src='upload/".$row[4]."' height=100 width=100/></td>
			 <td> <img src='upload/".$row[5]."' height=100 width=100/></td>
			 <td> ". $row[6]. "</td>
			 <td> ". $row[7]. "</td>
			  <td> ". $row[8]. "</td>
			 
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
