<?php

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {//使用&引用数组
    $value = $value * 2;
}

unset($value); // 必须最后取消掉引用

foreach ($arr as $value) {
    echo $value;//2468
}
















