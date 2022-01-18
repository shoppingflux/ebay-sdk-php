<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\RelatedItemsManagement\Types;

use DTS\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest;

class FindBundlesRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new FindBundlesRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\RelatedItemsManagement\Types\BaseRequest', $this->obj);
    }
}
