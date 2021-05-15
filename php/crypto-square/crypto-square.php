<?php
    
    function crypto_square(string $message)
    {
        $response = [];
        $normalized = preg_replace('/[^a-z0-9]/', '', strtolower($message));
        $rowLen = sqrt(strlen($normalized));
        $columnsLen = (int) ceil(strlen($normalized) / $rowLen);
        
        foreach (str_split($normalized) as $letter) {
            if (!isset($c) || $c === $columnsLen) {
                $c = 0;
            }
            
            if (!isset($response[$c])) {
                $response[$c] = $letter;
            } else {
                $response[$c] .= $letter;
            }
            
            $c++;
        }
        
        return implode(' ', $response);
    }