<?php
$str = $_GET;
if ($str['action'] == "set")
	setcookie($str['name'], $str['value'], time() + 3600);
else if ($str['action'] == "get" && $_COOKIE[$str['name']])
	echo $_COOKIE[$str['name']]."\n";
else if ($str['action'] == "del")
	setcookie($srt['name'], "", time());
?>