<?php
    
    function transpose(array $input): array
    {
        $response = [''];
        
        foreach ($input as $index => $line) {
            $length = strlen($line);
            for ($x = 0; $x < $length; $x++) {
                if (!isset($response[$x])) {
                    $response[$x] = '';
                }
                
                $response[$x] = str_pad($response[$x], $index).$line[$x];
            }
        }
        
        return $response;
    }