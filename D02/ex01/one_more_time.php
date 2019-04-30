#!/usr/bin/php
<?php
	if ($argc != 2)
		return (0);
	date_default_timezone_set("Europe/Paris");
	if (!preg_match("/^((L|l)undi|(M|m)ardi|(M|m)ercredi|(J|j)eudi|(V|v)endredi|(S|s)amedi|(D|d)imanche) [0-9]{1,2} ((J|j)anvier|(F|d)evrier|(M|m)ars|(A|a)vril||(J|j)uin|(J|j)uillet|(A|a)out|(S|s)eptembre|(O|o)ctobre|(N|n)ovembre|(D|d)ecembre) [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2}$/", $argv[1]))
		echo "Wrong Format\n";
	else
	{
		$tab = explode(" ", $argv[1]);
		$m_list = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];
		$tab[2] = array_search(strtolower($tab[2]), $m_list) + 1;
		$tab[4] = explode(":", $tab[4]);
		echo mktime($tab[4][0], $tab[4][1], $tab[4][2], $tab[2], $tab[1], $tab[3])."\n";
	}
?>