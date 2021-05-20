<?php
    
    /**
     * @throws InvalidArgumentException
     */
    function steps(int $n): int
    {
        if ($n <= 0) {
            throw new InvalidArgumentException('Only positive numbers are allowed');
        }
        
        $step = 0;
        
        while ($n !== 1) {
            if ($n % 2 === 0) {
                $n /= 2;
            } else {
                $n = ($n * 3) + 1;
            }
            $step++;
        }
        
        return $step;
    }