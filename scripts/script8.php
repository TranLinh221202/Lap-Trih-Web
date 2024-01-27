<?php

$arr = array(1, 5, 10, 2, 9, 45, 3, 7);

print "Các giá trị chẵn trong mảng là: ";
foreach ($arr as $value) {
    if ($value % 2 == 0) {
        echo $value . ' ';
    }
}
?>
