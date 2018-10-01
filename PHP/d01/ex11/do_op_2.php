<?PHP
if ($argc != 2)
{
	echo "Error: Parameters\n";
	return (0);
}

function maths_is_hard($str, $sign)
{
	$seperator = explode($sign, $str);
	$n1 = trim($seperator[0]);
	$n2 = trim($seperator[1]);
	$n1 = intval($n1);
	$n2 = intval($n2);
	if (is_numeric($n1) && is_numeric($n2))
	{
		switch ($sign)
		{
			case '+':
				echo $n1 + $n2."\n";
				break;
			case '-':
				echo $n1 - $n2."\n";
				break;
			case '*':
				echo $n1 * $n2."\n";
				break;
			case '/':
				echo $n1 / $n2."\n";
				break;
			case '%':
				echo $n1 % $n2."\n";
				break;
		}
	}
	else
		echo "Syntax Error\n";
}

$str = trim($argv[1]);
$plus = substr_count($str, "+");
$minus = substr_count($str, "-");
$multi = substr_count($str, "*");
$divide = substr_count($str, "/");
$mod = substr_count($str, "%");
if ($plus + $minus + $multi + $divide + $mod == 1)
{
	switch(1)
	{
		case $plus:
			maths_is_hard($str, '+');
			break;
		case $minus:
			maths_is_hard($str, '-');
			break;
		case $multi:
			maths_is_hard($str, '*');
			break;
		case $divide:
			maths_is_hard($str, '/');
			break;
		case $mod:
			maths_is_hard($str, '%');
			break;

	}
}
else
	echo "Syntax Error\n";
?>