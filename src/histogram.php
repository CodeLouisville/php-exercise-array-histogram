<?php
function histogram($array){
  $counts = array_count_values($array);
  return $counts;
}
 ?>
