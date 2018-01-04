<?php
require_once "PHPUnit/Autoload.php";
require_once "User.php";
class UserTest extends PHPUnit_Framework_TestCase
{
    // test the talk method
    public function testTalk() {
        // make an instance of the user
        $user = new User();
 
        // use assertEquals to ensure the greeting is what you
        $expected = "Hello world2!";
        $actual = $user->talk();
        $this->assertEquals($expected, $actual);
    }
}
