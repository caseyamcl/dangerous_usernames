<?php

use DangerousUserNames\DangerousUserNames;
use PHPUnit\Framework\TestCase;

/**
 * Class DangerousUsernamesTest
 */
class DangerousUserNamesTest extends TestCase
{
    public function testInstantiationSucceeds()
    {
        $this->assertInstanceOf('\DangerousUserNames\DangerousUserNames', new DangerousUserNames());
    }

    public function testCaseInsensitiveSearchReturnsTrue()
    {
        $obj = new DangerousUserNames();
        $this->assertTrue($obj->inList('Video'));
        $this->assertTrue($obj->inList('video'));
        $this->assertTrue($obj->inList('VIDEO'));
    }

    public function testItemNotInListReturnsFalse()
    {
        $obj = new DangerousUserNames();
        $this->assertFalse($obj->inList('fizzubzz'));

    }

    public function testCaseSensitiveSearchReturnsNoResult()
    {
        $obj = new DangerousUserNames();
        $this->assertFalse($obj->inList('Video', true));
    }

}