<?php

function histogram (array $array_input) {

    // array_count_values() returns an array using the values as the keys and their frequency as the values
    $histogram_array = array_count_values($array_input);
    return $histogram_array;
}
