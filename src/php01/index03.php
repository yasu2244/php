<?php

$count = 1;
while ($count <= 50) {
    if ($count % 15 == 0) {
        $count++;
        echo 'FizzBazz';
    } else if ($count % 3 == 0) {
        $count++;
        echo 'Fizz';
    } else if ($count % 5 == 0) {
        $count++;
        echo 'Buzz';
    } else {
        echo $count;
        $count++;
    }
}