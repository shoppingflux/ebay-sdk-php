<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\SearchCancellationsRestResponse;

class SearchCancellationsRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new SearchCancellationsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SearchCancellationsRestResponse', $this->obj);
    }

    public function testExtendsFindCancelResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\FindCancelResponse', $this->obj);
    }
}
