<?php
    
    function sieve(int $number)
    {
        $response = [];
        
        if ($number !== 1) {
            for ($i = 2; $i <= $number; $i++) {
                if (isPrime($i)) {
                    $response[] = $i;
                }
            }
        }
        
        return $response;
    }
    
    function isPrime(int $n): bool
    {
        for ($x = 2; $x < $n; $x++) {
            if ($n % $x === 0) {
                return false;
            }
        }
        
        return true;
    }