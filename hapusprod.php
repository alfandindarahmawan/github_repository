<?php

include("koneksi.php");

mysql_query("DELETE from tbl_product WHERE id_product='$_GET[id_product]'");
echo"Data Telah dihapus<br>
<a href=\"masterprod.php\">Kembali</a>";

?>