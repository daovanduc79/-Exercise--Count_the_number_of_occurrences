<?php

function countNumber($arr, $value)
{
    $count = 0;

    foreach ($arr as $num) {
        if ($num == $value) {
            $count++;
        }
    }

    return $count;
}