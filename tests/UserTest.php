<?php
//use src\UserClass;
//include('src/UserClass.php');
//include('vendor/autoload.php');
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase{

    public function testGetFullNameFunctionEquals(){
        $user =  new UserClass('Noman' , 'Kabeer');
        $this->assertEquals('Noman Kabeer' , $user->getFullName());
    }

    Public function testGetFullNameFunctionNotEqual(){
        $user =  new UserClass('Noman' , 'Kabeer');
        $this->assertNotEquals('NomaKabeer' , $user->getFullName());
    }
    /**
     * @test
     */
    Public function GetFullNameFunctionEmpty(){
        $user =  new UserClass('','');
        $this->assertEmpty('' , trim($user->getFullName()));
    }

}


?>