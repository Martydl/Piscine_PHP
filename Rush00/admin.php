<?php
session_start();
if ($_SESSION['loggued_on_user'] != "root")
{
	header("Location: ./");
	exit();
}
if ($_POST['catadd'])
{
	$newcat[0] = $_POST['newcat'];
	$newcat[1] = $_POST['newdesc'];
	$_SESSION['db']['cat'][] = $newcat;
	$fd = fopen("./database/categories.csv", 'a');
	fputcsv($fd, $newcat);
	fclose($fd);
}

if ($_POST['rmb'])
{
	$tab = array_map('str_getcsv', file("./database/categories.csv"));
	foreach($tab as $elem)
	{
		if ($_POST['catrm'] === $elem[0])
		{
			unset($tab[$i]);
			$tab = array_values($tab);
			break ;
		}
		$i++;
	}
	$fd = fopen("./database/categories.csv", 'w');
	foreach ($tab as $elem)
		fputcsv($fd, $elem);
	fclose($fd);
}

if ($_POST['itemadd'])
{
	$newitem[0] = $_POST['newname'];
	$newitem[1] = $_POST['newprice'];
	$newitem[2] = $_POST['newimg'];
	$newitem[3] = $_POST['newcat'];
	$newitem[4] = $_POST['newband'];
	$newitem[5] = $_POST['newyear'];
	$_SESSION['db']['items'][] = $newitem;
	$fd = fopen("./database/items.csv", 'a');
	fputcsv($fd, $newitem);
	fclose($fd);
}

if ($_POST['rmi'])
{
	$tab = array_map('str_getcsv', file("./database/items.csv"));
	foreach($tab as $elem)
	{
		if ($_POST['itemrm'] === $elem[0])
		{
			unset($tab[$i]);
			$tab = array_values($tab);
			break ;
		}
		$i++;
	}
	$fd = fopen("./database/items.csv", 'w');
	foreach ($tab as $elem)
		fputcsv($fd, $elem);
	fclose($fd);
}

?>

<html>
	<head></head>
	<body>
		<h1>Admin</h1>
		<a href="./">Retour</a>
		<p>Add category</p>
		<form method="POST" action="admin.php">
			Name<input type="text" name="newcat" />
			Description<input type="text" name="newdesc" />
			<input type="submit" name="catadd" value="OK" />
		</form>
		<p>Remove category</p>
		<form method="POST" action="admin.php">
			Name<input type="text" name="catrm" />
			<input type="submit" name="rmb" value="OK" />
		</form>
		<p>Add Item</p>
		<form method="POST" action="admin.php">
			Name<input type="text" name="newname" /><br />
			Price<input type="number" name="newprice" /><br />
			Image<input type="text" name="newimg" /><br />
			Category<input type="text" name="newcat" /><br />
			Band<input type="text" name="newband" /><br />
			Year<input type="number" name="newyear" /><br />
			<input type="submit" name="itemadd" value="OK" />
		</form>
		<p>Remove item</p>
		<form method="POST" action="admin.php">
			Name<input type="text" name="itemrm" />
			<input type="submit" name="rmi" value="OK" />
		</form>
	</body>
</html>
