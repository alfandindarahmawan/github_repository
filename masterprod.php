<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table width="80%" border="1">
<a href="tambahproduct.php">TAMBAH</a> 
<tr>
	
		<td align="center">ID PRODUCT</td>
		<td align="center">PRODUCT</td>
       <td  align="center" >JUMLAH</td>
       <td  align="center" >HARGA</td>  
       <td  align="center" >AKSI</td>   
       
</tr>
<?php
//connect database
$con = mysql_connect("localhost","root","pass123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("db_bnsp", $con);
//query untuk mengambil data pada database
$result = mysql_query("SELECT * FROM tbl_product");

?>
<?
	while($row = mysql_fetch_array($result))
{
?>
<tr>
	
		<td align="center"> <?php echo $row['id_product'] . ' '; ?></td>
		<td align="center"> <?php echo $row['product'] . ' '; ?></td>
		<td align="center"> <?php echo $row['qty'] . ' '; ?></td>
		<td align="center"> <?php echo $row['harga'] . ' '; ?></td>
        <td><a href="hapusprod.php?id_product=<?php echo $row['id_product']; ?>">Hapus</a>
        &nbsp;|&nbsp;
      	 <a href="editprod.php?id_product=<?php echo $row['id_product']; ?>">Edit</a> 
        </td>
		
</tr>
<? 
	}
?>
</table>
</form>
</body>
</html>