<?php

$letnghts = [10, 20, 30];
$result = [];

foreach ($letnghts as $a) {
 $result[] = $a * $a;
    //   $result[] = $key . $a * $a;
}
print_r($result);
// array_values($result);

// array_map



// calculate areas
// $result = array_map(function ($a) {
// 	return $a * $a;
// }, $letnghts);

// echo "<pre>";
// print_r($result);
// echo "</pre>";
?>