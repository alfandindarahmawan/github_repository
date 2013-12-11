<html>
<head>
<title>Login </title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<h2> SILAHKAN LOGIN </h2>
        Username: <input type="text" name="username" size="20">
        Password: <input type="password" name="password" size="20">
        <input type="submit" value="Login" name="login">

</form>

<?php
@$i_conek = $_POST['submit'];
	if(isset($i_conek)) // isset = jika variable jika ada isinya bisa dikirim
{
	if(!isset($username)||!isset($password))
	{
		header( 'Location: login.php');	
		exit();
	}
	else
	if (empty($username)||empty($password))
	{
		header( "Location: login.php");	
		exit();
	
	}
	
	else
	{
	$user = addcslashes($_POST['username']);
	$pass = md5($_POST['password']);
	
	//variable koneksi ke database
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "pass123";
	$dbdatabase = "db_bnsp";
	
	$db = mysql_connect("$dbhost", "$dbuser", "$dbpass") or 
	die ("koneksi gagal nih, cek apakah variabel sudah benar apa belum");
	
	mysql_select_db("$dbdatabase",$db);
	$result = mysql_query("select * from users where username='$user' 
	AND password = '$pass'",$db);
	
	//melihat user dan pass benar
	$rowcheck = mysql_num_rows($result);
	
	if($rowcheck >0)
	{
		while($row = mysql_fetch_array($result))
		{
			session_start();
			session_register('username');
			echo 'login berhasil';
			
			header("Location : coba.php");
		}
	}
	else
	{
		echo "invalid password and username";
	}

}


}

?>

</body>
</html>