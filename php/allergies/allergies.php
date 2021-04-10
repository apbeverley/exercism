<?php

class Allergen
{
    const CATS = 128;
    const CHOCOLATE = 32;
    const EGGS = 1;
    const PEANUTS = 2;
    const POLLEN = 64;
    const SHELLFISH = 4;
    const STRAWBERRIES = 8;
    const TOMATOES = 16;

    private $score;

    function __construct($allergenScore)
    {
        $this->score = $allergenScore;
    }

    public function getScore()
    {
        return $this->score;
    }
}

class Allergies
{
    function __construct($score)
    {

    }

    final public function isAllergicTo($allergens): bool
    {
        echo $allergens;
        return false;
    }

    public static function allergenList()
    {

    }

    public function getScore()
    {
        return $this->score;
    }
}