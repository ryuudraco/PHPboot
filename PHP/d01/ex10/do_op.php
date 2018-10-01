<?PHP
if ($argc != 4)
{
	echo "Error: Parameters\n";
	return (0);
}
$n1 = trim($argv[1]);
$n2 = trim($argv[3]);
$sign = trim ($argv[2]);
$n1 = intval($n1);
$n2 = intval($n2);
if (!strcmp($sign, "+"))
	echo $n1 + $n2."\n";
else if (!strcmp($sign, "-"))
	echo $n1 - $n2."\n";
else if (!strcmp($sign, "*"))
	echo $n1 * $n2."\n";
else if (!strcmp($sign, "/"))
	echo $n1 / $n2."\n";
else if (!strcmp($sign, "%"))
	echo $n1 % $n2."\n";
?>