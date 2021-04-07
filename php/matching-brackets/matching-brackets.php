<?php

function brackets_match(string $bracketString): bool
{
    preg_match_all('/[\{\}\[\]\(\)]/', $bracketString, $bracketsArray);

    $openBracketStack = [];

    if (!empty($bracketsArray[0])) {
        foreach ($bracketsArray[0] as $i => $bracket) {
            if (isOpeningBracket($bracket)) {
                $openBracketStack[] = $bracket;
            } else if (isMatchingBracket($bracket, $openBracketStack)) {
                array_splice($openBracketStack, -1);
            } else {
                return false;
            }
        }
    }

    return empty($openBracketStack);
}

function isOpeningBracket(string $bracket): bool
{
    $openCloseMapping = getBracketMapping();

    return isset($openCloseMapping[$bracket]);
}

function isMatchingBracket(string $bracket, array $openingBracket): bool
{
    $openCloseMapping = getBracketMapping();

    if (empty($openingBracket)) {
        return false;
    } else {
        return ($openCloseMapping[end($openingBracket)] === $bracket) ?? false;
    }
}

function getBracketMapping(): array
{
    return [
        '[' => ']',
        '(' => ')',
        '{' => '}'
    ];
}