<?php
    
    function placeQueen(int $x, int $y): bool
    {
        if (($x < 0) || ($y < 0)) {
            throw new InvalidArgumentException('The rank and file numbers must be positive.');
        }
        if (($x > 7) || ($y > 7)) {
            throw new InvalidArgumentException('The position must be on a standard size chess board.');
        }
        
        return true;
    }
    
    function canAttack(array $black, array $white): bool
    {
        //Is the queen on the same axis as the other
        if (($black[0] === $white[0]) || ($black[1] === $white[1])) {
            $status = true;
        }
        
        if ($black[0] - $black[1] === $white[0] - $white[1]) {
            $status = true;
        }
        
        if ($black[0] + $black[1] === $white[0] + $white[1]) {
            $status = true;
        }
        
        return $status ?? false;
    }