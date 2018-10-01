<?PHP
	$seperated = explode(" ", $argv[1]); 
	$filter = array_filter($seperated);
	echo implode(" ", $filter);
	echo "\n";
?>