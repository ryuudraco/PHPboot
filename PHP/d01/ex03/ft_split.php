<?PHP
function ft_split($string)
{
	$separated = explode(" ", $string);
	$filter = array_filtered($seperated);
	$slice_dice = array_slice($filter, 0);
	sort ($slice_dice);
	return ($slice_dice);
}
?>