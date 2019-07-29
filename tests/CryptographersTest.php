<?php

use Bariseser;

use PHPUnit\Framework\TestCase;

class CryptographersTest extends TestCase
{
    public function testEncode(){
        $this->assertNotInstanceOf(\RuntimeException::class, Bariseser\Cryptographers::encrypt('foobar'));
    }

    public function testDecode(){
        $password = Bariseser\Cryptographers::encrypt("Bariseser");
        $this->assertNotInstanceOf(\RuntimeException::class, Bariseser\Cryptographers::decrypt($password));
    }
}
