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
        
        for ($x = 0; $x <= $maxDigits - $length; $x++) {
            $response[] = substr($digits, $x, $length);
        }
        
        return $response;
    }