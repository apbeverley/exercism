<?php

function accumulate(array $input, callable $accumulator)
{
    $response = array();

    foreach($input as $i => $value){
        $response[] = $accumulator($value);
    }

    return $response;
}
