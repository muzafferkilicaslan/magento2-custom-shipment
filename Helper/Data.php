<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Shipment\CustomShipment\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->scopeConfig->isSetFlag(
            'carriers/express_shipping/is_active',
            ScopeInterface::SCOPE_STORE,
        );
    }

    /**
     * @return string
     */
    public function weightLimitForMinPrice()
    {
        return $this->scopeConfig->getValue(
            'carriers/express_shipping/weight_limit_for_min_price',
            ScopeInterface::SCOPE_STORE,
        );
    }

    /**
     * @return string
     */
    public function additionalPrice()
    {
        return $this->scopeConfig->getValue(
            'carriers/express_shipping/additional_price',
            ScopeInterface::SCOPE_STORE,
        );
    }

    /**
     * @return string
     */
    public function maximumWeightLimit()
    {
        return $this->scopeConfig->getValue(
            'carriers/express_shipping/maximum_weight_limit',
            ScopeInterface::SCOPE_STORE,
        );
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->scopeConfig->getValue(
            'carriers/express_shipping/error_message',
            ScopeInterface::SCOPE_STORE,
        );
    }

}