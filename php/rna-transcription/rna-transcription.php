<?php

function toRna(string $dnaStrand): string
{
    $dnaStrandToRnaComplement = [
        'C' => 'G',
        'G' => 'C',
        'T' => 'A',
        'A' => 'U'
    ];

    $rnaString = '';

    for ($i = 0; $i < strlen($dnaStrand); $i++) {
        $rnaString .= $dnaStrandToRnaComplement[$dnaStrand[$i]];
    }

    return $rnaString;
}

