<?php
    
    function isIsogram(string $word)
    {
        $formatWord = mb_strtolower(preg_replace(['/\s+/', '/-/'], '', $word));
        $uniqueWord = array_unique(mb_str_split($formatWord));
        $wordAsArray = mb_str_split($formatWord);
        
        return (count($uniqueWord) === count($wordAsArray));
    }