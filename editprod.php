<html>
<head>
<title>Login </title>
</head>
<body>

<?php
 $sambung = mysql_connect("localhost", "root", "pass123") or die ("Gagal konek ke server.");
  mysql_select_db("db_bnsp") or die ("Gagal membuka database.");

	$id_product = $_GET['id_product'];
	$query = "select * from tbl_product where id_product='$id_product'";
	$result =  mysql_query($query, $sambung) or die("gagal melakukan query");
     $buff = mysql_fetch_array($result);
     mysql_close($sambung);
?>


<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

		<table width="259" border="0" bgcolor="grey">
		<tr>
				<td colspan="5"><center>
			<table width="280" border=0 bgcolor="#FFFFFF">
				
				<tr>
						<td>id prod:</td>
						<td><input size="16"  type="text" name="id_product" value="<?php echo $buff['id_product']; ?>" /></td>
	
				</tr>
                
                <tr>
						<td>product:</td>
						<td><input size="16" type="text"  name="product" value="<?php echo $buff['product']; ?>" /></td>
				</tr>
				
                <tr>
						<td>Jumlah :</td>
						<td><input size="16"  type="text" name="qty" value="<?php echo $buff['qty']; ?>" /></td>
				</tr>
				<tr>
						<td>Harga :</td>
						<td><input size="16" type="text" name="harga" value="<?php echo $buff['harga']; ?>"/></td>
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
			
			
			$id_product = $_POST['id_product'];
			$product = $_POST['product'];
			$qty = $_POST['qty'];
			$harga = $_POST['harga'];
			
			include("koneksi.php");
			
			$query = mysql_query("update tbl_product set product='$product', qty='$qty',harga='$harga' where id_product='$id_product'");
			echo "Data Telah diupdate<br>
			<a href=\"masterprod.php\">Kembali</a>";

	
	
}

?>

</body>
</html>