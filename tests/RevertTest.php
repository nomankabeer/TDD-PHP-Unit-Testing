<?php

use PHPUnit\Framework\TestCase;
require_once 'revert.php';
class RevertTest extends TestCase{

    public function testRevertStringFunction(){
        $this->assertEquals('j<*zz' , revert('z<*zj'));
        $this->assertEquals('jz@zs*ghf!a<*df' , revert('fd@af*hgs!z<*zj'));
    }

    Public function testRevertStringNotEquals(){
        $this->assertNotEquals('dj<*zz' , revert('z<*zj'));
        $this->assertNotEquals('djz@zs*ghf!a<*df' , revert('fd@af*hgs!z<*zj'));
    }

}


?>