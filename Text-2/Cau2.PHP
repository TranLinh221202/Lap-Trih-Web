
<?php
$arr = [15, 25, 5, 7, 9, 4, 8, 10, 15];

$oddNumbers = array_filter($arr, function($value) {
    return $value %2; });
sort($oddNumbers);

foreach ($arr as &$value) {
    if ($value % 2 != 0) {
        $value = array_shift($oddNumbers);
    }
}
 "Mảng sau khi sắp xếp các số lẻ tăng dần:\n";
print_r($arr);
?>