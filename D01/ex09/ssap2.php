#!/usr/bin/php
<?php
function epur_str($epur)
{
	trim($epur);
	$epur = explode(" ", $epur);
	$epur = array_filter($epur);
	$epur = implode(" ", $epur);
	return ($epur);
}

if ($argc > 1)
{
	array_splice($argv, 0, 1);
	foreach($argv as &$elem)
		$elem = epur_str($elem);
	$arr = implode(" ", $argv);
	$arr = explode(" ", $arr);
	foreach($arr as $elem)
	{
		if (ctype_alpha("$elem[0]"))
			$str[sizeof($str)] = $elem;
		else if (is_numeric("$elem[0]"))
			$num[sizeof($num)] = $elem;
		else
			$asc[sizeof($asc)] = $elem;
	}
	if ($str)
	{
		sort($str, SORT_NATURAL | SORT_FLAG_CASE);
		foreach($str as $elem)
			echo "$elem\n";
	}
	if ($num)
	{
		sort($num, SORT_STRING);
		foreach($num as $elem)
			echo "$elem\n";
	}
	if ($asc)
	{
		sort($asc);
		foreach($asc as $elem)
			echo "$elem\n";
	}
}
?>