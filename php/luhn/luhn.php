<?php

function isValid($cardNumber): bool
{
    $checksum = '';
    $cardNumber = preg_replace("/\s+/", "", $cardNumber);

    if (is_numeric($cardNumber)) {
        foreach (str_split(strrev($cardNumber)) as $i => $d) {
            $checksum .= $i % 2 !== 0 ? $d * 2 : $d;
        }
    }

    return !empty($checksum) && array_sum(str_split($checksum)) % 10 === 0;
}