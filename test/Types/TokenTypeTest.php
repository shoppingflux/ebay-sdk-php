<?php
namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Types\TokenType;

class TokenTypeTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new TokenType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\TokenType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 'foo';
        $this->assertEquals('foo', $this->obj->value);
        $this->assertInternalType('string', $this->obj->value);
    }
}
