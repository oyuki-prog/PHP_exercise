<?php

$nums = range(1,100);

function maxArray($array)
{
    $max = $array[0];
    foreach ($array as $num) {
        if ($max < $num) {
            $max = $num;
        }
    }
    return $max;
}

echo maxArray($nums);