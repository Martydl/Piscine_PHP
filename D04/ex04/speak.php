<?php
session_start();
if ($_SESSION['loggued_on_user'] === "")
	exit("ERROR\n");
if ($_POST['submit'] === "OK")
{
	if (file_exists("../private/chat"))
		$tab = unserialize(file_get_contents("../private/chat"));
	$add['login'] = $_SESSION['loggued_on_user'];
	$add['time'] = time();
	$add['msg'] = $_POST['msg'];
	$tab[] = $add;
	file_put_contents("../private/chat", serialize($tab), LOCK_EX);
}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
	</head>
	<body>
		<form method="POST" action="speak.php">
			<input style="width: 500px; line-height: 20px;" type="text" name="msg" autofocus />
			<input type="submit" name="submit" value="OK" />
		</form>
	</body>
</html>
