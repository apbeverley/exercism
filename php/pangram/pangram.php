<?php

function isPangram($word)
{
    $letters = range('a','z');

    foreach (str_split(strtolower($word)) as $i => $letter) {
        $key = array_search($letter, $letters);

        if ($key !== false) {
            unset($letters[$key]);

            if (empty($letters)) {
                break;
            }
        }
    }

    return (empty($letters)) ? true : false;
}