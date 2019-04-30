#!/usr/bin/php
<?php

function filter($str)
{
	$str = str_split($str);
	if ((!is_numeric($str[0]) && !$str[0]))
		return (0);
	return (1);
}

if ($argc == 2)
{
	$epur = $argv[1];
	trim($epur);
	$epur = explode(" ", $epur);
	$epur = array_filter($epur, "filter");
	$epur = implode(" ", $epur);
	echo "$epur\n";
}
?>