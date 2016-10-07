<?php
function histogram($array)
{
	if(!is_array($array)){
		//echo "The input must be an array!";
		exit;
	}
	$output =[];
	foreach ($array as $item) {
		if (isset ($output [$item])){
			$output [$item] += 1;			
		} else {
			$output [$item] = 1;
		}				
	}
	return $output;
}
/*
$input = [];
var_dump(histogram($input));
*/
?>