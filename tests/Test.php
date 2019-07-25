<?php
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    function testDummy()
    {
        $this->assertEqual('foo', 'foo');
    }

    function testLdap()
    {
        $ldap = ldap_connect('127.0.0.1', 3389);
        ldap_bind($ldap, 'admin', 'test');
    }
}
