<?php session_start();
if (session_is_registered('id'))
{
	session_unregister("id");
	session_unregister("nama");
	session_unregister("username");
	session_unregister("tipe");
	//session_destroy();
	echo "<script> document.location.href='index.php'; </script>";

}else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>
