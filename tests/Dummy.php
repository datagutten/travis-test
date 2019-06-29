<?php

abstract class RequestsTest_Transport_Base extends PHPUnit_Framework_TestCase
{
    public $foo;
    public function setUp()
    {
        $this->foo = 'bar';
    }

    public function dummy_test() {
        $this->assertEquals($this->foo, 'bar');
    }
}