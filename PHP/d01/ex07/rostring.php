<?PHP
$seperator = explode(" ", $argv[1]);
	$filter = array_filter($seperator);
	$slice_dice = array_slice($filter, 0, 1);
	$filter = array_splice($filter, 1);
	foreach ($filter as $value)
		echo $value." ";
	echo $slice_dice[0]."\n";
?>