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

use DTS\eBaySDK\PostOrder\Types\ProvideInquiryShipmentInfoRestRequest;

class ProvideInquiryShipmentInfoRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new ProvideInquiryShipmentInfoRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\ProvideInquiryShipmentInfoRestRequest', $this->obj);
    }

    public function testExtendsShipmentInfoRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\ShipmentInfoRequest', $this->obj);
    }
}
