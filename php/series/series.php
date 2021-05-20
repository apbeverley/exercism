<?php
    
    /**
     * @throws Exception
     */
    function slices(string $digits, int $length): array
    {
        $response = [];
        
        $maxDigits = strlen($digits);
        
        if ($length === 0 || $length > $maxDigits) {
            throw new Exception('invalid length');
        }
        
        for ($x = 0; $x <= $maxDigits; $x++) {
            if ($x + $length > $maxDigits) {
                break;
            }
            
            $response[] = substr($digits, $x, $length);
        }
        
        return $response;
    }