#!/usr/bin/php
<?php
if ($argc > 1)
	echo preg_replace('/[ \t]+/', ' ',trim($argv[1]," \t"))."\n";
?>