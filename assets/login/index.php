<?php session_start();
if(!(isset($_SESSION['id']))){
if (isset($_POST['username'])) {
	include ("../include/database.php");

	$user=trim($_POST['username']);
	$pass=trim($_POST['pass']);
	$login=mysql_db_query($db,"select * from user where username='$user' and password='$pass'",$koneksi);
	$cek=mysql_num_rows($login);

		if ($cek == 0 ){
			echo "<script> document.location.href='index.php?error=Username tidak terdaftar'; </script>";
		}	else{
			while ($row=mysql_fetch_array($login)){
				$id=$row[0];
				$_SESSION['id'] = $row[0];
				$_SESSION['nama'] = $row[1];
				$_SESSION['username']=$row[2];
				$_SESSION['tipe']=$row[5];
			}
			echo "<script> document.location.href='../index.php'; </script>";
		}

}
}else{
	echo "<script> document.location.href='../index.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>A Pen by  Zoltan Kohalmy</title>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php
		$error = $_GET['error'];
		if (isset($error)) {
			?>
			<script type='text/javascript'>alert('<?php echo $error; ?>');</script>
			<?php
		}
	 ?>
<form action="index.php" method="post">
  <header>Login</header>
  <label>Username <span>*</span></label>
  <input type="text" name="username" id="username"/>
  <div class="help">At least 6 character</div>
  <label>Password <span>*</span></label>
  <input type="password" name="pass" id="pass"/>
  <div class="help">Use upper and lowercase lettes as well</div>
  <button>Login</button>
	<div><center> <a href="../index.php"> Back to Home </a></center></div>
</form>

</body>

</html>
