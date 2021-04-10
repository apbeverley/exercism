<?php

class AllergiesTest extends PHPUnit\Framework\TestCase
{
    public static function setUpBeforeClass() : void
    {
        require_once 'allergies.php';
    }

    /**
     * @dataProvider provideListOfAllergen
     *
     * @param Allergen $allergen
     */
    public function testNoAllergiesMeansNotAllergicToAnything($allergen) : void
    {
        $allergies = new Allergies(0);

        $this->assertFalse($allergies->isAllergicTo($allergen));
    }

    public function provideListOfAllergen() : array
    {
        require_once 'allergies.php';

        return [
            [new Allergen(Allergen::CATS), 'Only allergic to cats'],
            [new Allergen(Allergen::CHOCOLATE), 'Only allergic to chocolate'],
            [new Allergen(Allergen::EGGS), 'Only allergic to eggs'],
            [new Allergen(Allergen::PEANUTS), 'Only allergic to peanuts'],
            [new Allergen(Allergen::POLLEN), 'Only allergic to pollen'],
            [new Allergen(Allergen::SHELLFISH), 'Only allergic to shellfish'],
            [new Allergen(Allergen::STRAWBERRIES), 'Only allergic to strawberries'],
            [new Allergen(Allergen::TOMATOES), 'Only allergic to tomatoes'],
        ];
    }
}
