<?php
    
    function flatten(array $input): array
    {
        $result = [];
        $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($input));
        
        foreach ($iterator as $v) {
            if ($v !== null) {
                $result[] = $v;
            }
        }
        
        return $result;
    }