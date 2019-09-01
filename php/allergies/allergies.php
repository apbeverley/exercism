<?php

class AllergiesTest extends PHPUnit\Framework\TestCase
{
class Allergies
{
    protected $allergens;

    function __construct($allergens) {
    {
        $this->allergens = $allergens;

        echo "<pre>";Pprint_r($allergens);exit;
    }
}