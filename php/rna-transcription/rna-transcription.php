<?php

function toRna(string $dnaStrand): string
{
    $dnaStrandToRnaComplement = [
        'C' => 'G',
        'G' => 'C',
        'T' => 'A',
        'A' => 'U'
    ];

    return strtr($dnaStrand, $dnaStrandToRnaComplement);
}

