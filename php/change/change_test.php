<?php

class ChangeTest extends PHPUnit\Framework\TestCase
{
    public static function setUpBeforeClass() : void
    {
        require_once 'change.php';
    }
    
    public function testWithLargeTargetValue() : void
    {
        $this->assertEquals(
            [2, 2, 5, 20, 20, 50, 100, 100, 100, 100, 100, 100, 100, 100, 100],
            findFewestCoins([1, 2, 5, 10, 20, 50, 100], 999)
        );
    }
}
