<?php

function raindrops($n) :string
{
    $response = '';

    $a = [
        '3' => 'Pling',
        '5' => 'Plang',
        '7' => 'Plong',  
    ];

    foreach($a as $c => $r){
        $count = 0;

        while($count < $n){
            $count += $c;
        }

        if($count == $n){
            $response .= $r;
        }
    }

    return ($response != '') ? $response : $n;
}