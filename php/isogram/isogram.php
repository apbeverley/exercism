<?php
    
    function isIsogram(string $word)
    {
        $formatWord = preg_replace('/[^a-z]/', '', mb_strtolower($word));
        $uniqueWord = array_unique(mb_str_split($formatWord));
        $wordAsArray = mb_str_split($formatWord);
        
        return (count($uniqueWord) === count($wordAsArray));
    }