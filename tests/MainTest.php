<?php
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase{
    public function testAddTwoNumberResultInFour(){
        $this->assertEquals(4, 2 +2);
    }
}

?>