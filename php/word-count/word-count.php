<?php

    function wordCount($phrase) :array
    {
        $formatPhrase = strtolower(trim($phrase));

        $words = array_map('getWord', preg_split('/[\s]+/', $formatPhrase));
        $response = array();

        foreach($words as $word) {
            if ($word != '') {       
                if (isset($response[$word])) {
                    $response[$word]++;
                } else {
                    $response[$word] = 1;
                }
            }
        }

        return $response;
    }

    function getWord($word)
    {
        return (preg_replace('/[^\da-z]/i', '', $word));
    }