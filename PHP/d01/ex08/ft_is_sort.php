<?PHP
function ft_is_sort($array)
{
	$i = 0;
	$count = count(array);
	$sorted = [];
	foreach ($array as $value)
	 	array_push(sorted, $value);
	 sort($sorted);
	 while($i < $count)
	 {
	 	if (strcmp($array[$i], $sorted[i]))
	 		return (0);
	 	$i++;
	 }
	 return (1);
}
?>