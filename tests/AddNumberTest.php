<?php

use PHPUnit\Framework\TestCase;

class AddNumberTest extends TestCase{

    public function testAddNumberFunction(){
        require 'AddNumber.php';
        $this->assertEquals(4 , addNumber(2,2));
        $this->assertEquals(5 , addNumber(2,3));
        $this->assertNotEquals(4 , addNumber(2,3));
    }

}


?>