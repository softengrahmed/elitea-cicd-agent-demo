<?php

use PHPUnit\Framework\TestCase;
use App\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function testSayHello()
    {
        $hello = new HelloWorld();
        $this->assertEquals("Hello, World!", $hello->sayHello());
    }
}
