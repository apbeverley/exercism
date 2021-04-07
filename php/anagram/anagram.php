<?php

function detectAnagrams(string $word, array $sublist): array
{
    $anagramWords = [];

    foreach ($sublist as $subWord) {
        if (checkAnagram($word, $subWord)) {
            $anagramWords[] = $subWord;
        }
    }

    return $anagramWords;
}

function checkAnagram(string $word, string $subWord): bool
{
    $word = strtolower($word);
    $subWord = strtolower($subWord);

    if ($word !== $subWord && strlen($word) === strlen($subWord)) {
        for ($i = 0; $i < strlen($word); $i++) {
            $pos = strpos($subWord, $word[$i]);

            if ($pos !== false) {
                $subWord = substr($subWord, 0, $pos) . substr($subWord, $pos + 1);
            }
        }
    }

    return empty($subWord);
}