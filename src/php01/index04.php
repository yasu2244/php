<?php
$people = [
  ["Taro", 25, "men"],
  ["Jiro", 20, "men"],
  ["hanako", 16, "women"]
];

foreach ($people as $aaaa) {
    echo $aaaa[0] . '(' . $aaaa[1] . '歳' . $aaaa[2] . ')';
    echo '';
}