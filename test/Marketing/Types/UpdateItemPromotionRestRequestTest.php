<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use DTS\eBaySDK\Marketing\Types\UpdateItemPromotionRestRequest;

class UpdateItemPromotionRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new UpdateItemPromotionRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\UpdateItemPromotionRestRequest', $this->obj);
    }

    public function testExtendsItemPromotion()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\ItemPromotion', $this->obj);
    }
}
