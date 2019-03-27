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
	$str = implode(" ", $argv);
	$str = explode(" ", $str);
	sort($str);
	foreach($str as $elem)
	echo "$elem\n";
}
?>