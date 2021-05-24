<?php

function countValue($array, $value): int
{
    $count = 0;

    for ($i = 0; $i < count($array); $i++)
    {
        if ($array[$i] == $value)
        {
            $count++;
        }
    } return $count;
}

$array = [1,2,3,2,4,2,4,2,5,6,7];

echo countValue($array, 4);
