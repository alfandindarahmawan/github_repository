<html>
<head>
<title>Login </title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

		<table width="259" border="0" bgcolor="grey">
		<tr>
				<td colspan="5"><center>
			<table width="280" border=0 bgcolor="#FFFFFF">
				
				<tr>
						<td>id prod:</td>
						<td><input size="16" name="id" type="text" /></td>
	
				</tr>
                
                <tr>
						<td>product:</td>
						<td><input size="16" name="prod" type="text" /></td>
				</tr>
				
                <tr>
						<td>Jumlah :</td>
						<td><input size="16" name="jum" type="text" /></td>
				</tr>
				<tr>
						<td>Harga :</td>
						<td><input size="16" name="har" type="text" /></td>
				</tr>
				
                <tr>
					<td></td>
					<td>
					<input type="Submit" name="submit" value="SEND">
					</td>
					
				</tr>
			</table>
				</td>
		</tr>
		</table>

</form>




<?php
    
	@$i_conek = $_POST['submit'];
	if(isset($i_conek)) // isset = jika variable jika ada isinya bisa dikirim
{
	
	include("koneksi.php");
	$data1 = $_POST['id'];
	$data2 = $_POST['prod']; 
	$data3 = $_POST['jum'];
	$data4 = $_POST['har']; 
	
	mysql_query("INSERT INTO tbl_product(id_product, product,qty,harga) VALUES('$data1','$data2','$data3','$data4')");
	
	
}

?>

</body>
</html>