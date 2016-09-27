<?php

function histogram(array $array) {
    $array_count = array_count_values($array);
    return $array_count;
}
