<?php

namespace Npbreland\CicdTest\Tests;

class FakeClassTest extends \PHPUnit\Framework\TestCase
{
    public function testFakeClass()
    {
        $fake = new \Npbreland\CicdTest\FakeClass();
        $string = $fake->doSomething();

        $this->assertEquals($string, 'Hello World');
    }
}

