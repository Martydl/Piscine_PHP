#!/usr/bin/php
<?php

function filter($str)
{
	$str = str_split($str);
	if ((!is_numeric($str[0]) && !$str[0]))
		return (0);
	return (1);
}

function epur_str($epur)
{
	trim($epur);
	$epur = explode(" ", $epur);
	$epur = array_filter($epur, "filter");
	$epur = implode(" ", $epur);
	return ($epur);
}

$str = epur_str($argv[1]);
$str = explode(" ", $str);
$str[sizeof($str)] = $str[0];
array_splice($str, 0, 1);
$str = implode(" ", $str);
echo "$str\n";
?>