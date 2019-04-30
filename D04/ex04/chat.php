<?php
	date_default_timezone_set('Europe/Paris');
	if (file_exists("../private/chat"))
	{
		$fd = fopen("../private/chat", 'r');
		flock($fd, LOCK_SH);
		$chat = unserialize(file_get_contents("../private/chat"));
		fclose($fd);
		foreach ($chat as $elem)
		{
			$time = date('[H:i]', $elem['time']);
			$login = $elem['login'];
			$msg = $elem['msg'];
			echo "$time <b>$login</b>: $msg<br />\n";
		}
	}
?>
