<?php

function histogram (array $input) {

	$histogram_array = array_count_values($input);
	return $histogram_array;

}