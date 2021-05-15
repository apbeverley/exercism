<?php
    
    function translate(string $word)
    {
        $words = explode(" ", $word);
        $response = [];
        
        foreach ($words as $w) {
            $response[] = preg_replace(
                    "/^(ch|s?qu|thr?|sch|[^aeiou])(?!t)(?!r)(.+)/",
                    "$2$1", trim($w)
                ).'ay';
        }
        
        return implode(" ", $response);
    }