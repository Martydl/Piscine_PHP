#!/usr/bin/php
<?php
if ($argc == 2)
{
	$epur = $argv[1];
	trim($epur);
	$epur = explode(" ", $epur);
	$epur = array_filter($epur);
	$epur = implode(" ", $epur);
	echo "$epur\n";
}
?>