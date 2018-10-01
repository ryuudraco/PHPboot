<?PHP
	$stack = [];
	for ($i = 1; $i < $argc; $i++)
	{
		$seperated = explode(" ", $argv[$i]);
			foreach ($seperated as $value)
				array_push($stack, $value);
	}
	$filter = array_filter($stack);
	sort($filter);
	foreach ($filter as $value)
		echo $value."\n";
?>