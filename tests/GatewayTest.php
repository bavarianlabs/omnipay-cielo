<?php

/*
 * This file is part of the Bavarian package.
 *
 * (c) Jorge Vahldick <jorge.dev@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omnipay\Cielo\Tests;

use Omnipay\Cielo\Gateway;
use Omnipay\Tests\GatewayTestCase;

/**
 * @author Jorge Vahldick <jorge.dev@outlook.com>
 */
class GatewayTest extends GatewayTestCase
{

    /**
     * @var Gateway
     */
    protected $gateway;

    public function setUp()
    {
        parent::setUp();
        $this->gateway = new Gateway();
    }

    public function testShouldBeReturnGatewayName()
    {
        $this->assertEquals("Cielo", $this->gateway->getName(), "The gateway name do not matter with the 'Cielo'");
    }


    /**
     * @dataProvider dataProvider
     */
    public function testIfMerchantIdIsSetup($merchantId)
    {
        $this->gateway->setMerchantId($merchantId);
        $this->assertEquals($merchantId, $this->gateway->getMerchantId(), "The merchantId set is not equals same that passed");
    }

    /**
     * @dataProvider dataProvider
     */
    public function testIfTokenServiceIsSetupIsNotTheSameWithWrongToken($merchantId)
    {
        $this->gateway->setMerchantId($merchantId.'token');
        $this->assertNotEquals($merchantId, $this->gateway->getMerchantId(), "The merchantId set is not equals same that passed");
    }

    public function dataProvider()
    {
        return array(
            array('000'),
        );
    }

}