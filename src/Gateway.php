<?php

/*
 * This file is part of the Bavarian package.
 *
 * (c) Jorge Vahldick <jorge.dev@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omnipay\Cielo;

use Omnipay\Common\AbstractGateway;

/**
 * @author Jorge Vahldick <jorge.dev@outlook.com>
 */
class Gateway extends AbstractGateway
{

    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Cielo';
    }

    public function setMerchantId($merchantId)
    {
        $this->setParameter('merchantId', $merchantId);
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

}