<?php

function distance(string $strandA, string $strandB) : int
{
    $str1 = strlen($strandA);
    $str2 = strlen($strandB);

    if ($str1 != $str2) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }

    $distance = 0;

    for ($i = 0;$i < $str1;$i++) {
        if ($strandA[$i] != $strandB[$i]) {
            $distance++;
        }
    }

    return $distance;
}
