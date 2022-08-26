<?php

require 'PasswordClass.php';

use PHPUnit\Framework\TestCase;

class PasswordClassTest extends TestCase
{
    public function testShouldReturnTrue()
    {
        $password = new PasswordClass();

        $check = $password->checkLength("testnumerouno");

        $this->assertTrue($check);
    }

    public function testLengthC1ShouldReturnTrue()
    {
        $password = new PasswordClass();

        $check = $password->checkLength("12345678");

        $this->assertTrue($check);
    }

    public function testSpecialCharC1ShouldReturnTrue()
    {
        $password = new PasswordClass();

        $check = $password->checkSpecialChar("salut&");

        $this->assertTrue($check);
    }

    public function testNumberInStringC1ShouldReturnTrue()
    {
        $password = new PasswordClass();

        $check = $password->checkNumberInString("salut1");

        $this->assertTrue($check);
    }

    public function testAllCheckShouldReturnTrue(){
        $password = new PasswordClass();

        $check = $password->checkAllSpecification("salut1&bla");

        $this->assertTrue($check);
    }
}
