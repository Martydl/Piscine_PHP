<?php
include ("auth.php");

session_start();
if (auth($_POST['login'], $_POST['passwd']))
{
	$_SESSION['loggued_on_user'] = $_POST['login'];
}
else
{
	$_SESSION['loggued_on_user'] = "";
	exit ("ERROR\n");
}
?>

<html>
	<body>
		<iframe name="chat" src="./chat.php" width="100%" height="550px">
		</iframe>
		<br />
		<iframe name="speak" src="./speak.php" width="100%" height="50px">
		</iframe>
		<a href="./logout.php">D&eacute;connection</a>
	</body>
</html>

