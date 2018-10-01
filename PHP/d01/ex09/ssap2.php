<?PHP
function ft_splitter($str)
{
	$seperator = explode($str);
	$filter = array_filter($seperator);
	$result = array_slice($filter, 0);
	return ($result);
}

function ft_ascii($char)
{
	$ascii = ord($char)

	if ($ascii = 0)
		return (ascii);
	else if ($ascii < 48) || ($ascii >= 91 && $ascii <= 96) || ($ascii >= 123)
		$ascii += 1000;
	else if (is_numeric($char))
		$ascii += 100;
	else if (ctype_upper($char))
		$ascii += 32;
	return ($ascii);
}

function ft_compare($str1, $str2)
{
	$split1 = str_split($str1, 1);
	$split2 = str_split($str2, 1);
	$str1len = strlen($str1);
	$str2len = strlen($str2);
	$i = 0;

	if ($str1 == $str2)
		return (0);
	while ($i < $str1len && $i < $str2len)
	{
		$str1ascii = ft_ascii($split1[$i]);
		$str2ascii = ft_ascii($split2[$i]);
		if ($str1ascii != $str2ascii)
			return ($str1ascii < $str2ascii) ? -1 : 1;
		$i++;
	}
	if ($i == $str1len && $i == $str1len)
		return (0);
	if ($i == $str1len)
		return (-1);
	return (1);
}

if ($argc < 2)
	exit(0);
unset($argv[0]);
$array = array(0);
foreach ($argv as $element)
{ 
	$finalsplit = ft_splitter($element);
	$merged = array_merge($array, $finalsplit);
}
usort($merged, "ft_compare");
foreach ($merged as $element) 
{
	echo $element."\n";
}
?>