#!/usr/bin/php
<?php
while (1)
{
	echo "Entrez un nombre: ";
	$handle = fopen("php://stdin","r");
	$num = fgets($handle);
	if ($num == NULL)
		break;
	$num = substr($num, 0, -1);
	$num = trim($num);
	if (is_numeric($num) == FALSE)
		echo "'$num' n'est pas un chiffre\n";
	else
		if ($num % 2 == 0)
			echo "Le chiffre $num est Pair\n";
		else
			echo "Le chiffre $num est Impair\n";
}
echo "\n";
?>