<?php
/**
 * TaxIdentifierTest
 *
 * PHP version 8.1
 *
 * @package  eBay\Sell\Fulfillment
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * The version of the OpenAPI document: v1.20.6
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace eBay\Sell\Fulfillment\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * TaxIdentifierTest Class Doc Comment
 *
 * @description This type is used by the &lt;strong&gt;taxIdentifier&lt;/strong&gt; container that is returned in &lt;strong&gt;getOrder&lt;/strong&gt;. The &lt;strong&gt;taxIdentifier&lt;/strong&gt; container consists of taxpayer identification information for buyers from Italy, Spain, or Guatemala. It is currently only returned for orders occurring on the eBay Italy or eBay Spain marketplaces.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; Currently, the &lt;strong&gt;taxIdentifier&lt;/strong&gt; container is only returned in &lt;strong&gt;getOrder&lt;/strong&gt; and not in &lt;strong&gt;getOrders&lt;/strong&gt;. So, if a seller wanted to view a buyer&#39;s tax information for a particular order returned in &lt;strong&gt;getOrders&lt;/strong&gt;, that seller would need to use the &lt;strong&gt;orderId&lt;/strong&gt; value for that particular order, and then run a &lt;strong&gt;getOrder&lt;/strong&gt; call against that order ID. &lt;/span&gt;
 * @package     eBay\Sell\Fulfillment
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class TaxIdentifierTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "TaxIdentifier"
     */
    public function testTaxIdentifier()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "taxpayer_id"
     */
    public function testPropertyTaxpayerId()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "tax_identifier_type"
     */
    public function testPropertyTaxIdentifierType()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "issuing_country"
     */
    public function testPropertyIssuingCountry()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
