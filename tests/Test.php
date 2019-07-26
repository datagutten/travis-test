<?php
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    function testDummy()
    {
        $this->assertEquals('foo', 'foo');
    }

    function testLdap()
    {
        $ldap = ldap_connect('ldap://127.0.0.1', 389);

        ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap, LDAP_OPT_NETWORK_TIMEOUT, 1);
        if (!ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0))
            throw new Exception('Failed to set opt referrals to 0');

        ldap_bind($ldap, 'cn=admin,dc=example,dc=com', 'test');


    }
}
