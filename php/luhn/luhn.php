<?php
    
    function isValid($cardNumber): bool
    {
        $cardNumber = preg_replace("/\s+/", "", $cardNumber);
        
        return is_numeric($cardNumber) && isValidLuhn($cardNumber);
    }
    
    function isValidLuhn(string $cardNumber): bool
    {
        $checksum = '';
        
        foreach (str_split(strrev($cardNumber)) as $i => $d) {
            $checksum .= $i % 2 !== 0 ? $d * 2 : $d;
        }
        
        return !empty($checksum) && array_sum(str_split($checksum)) % 10 === 0;
    }