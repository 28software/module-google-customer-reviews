<?php
/**
 * Copyright © 28Software (https://28software.com)
 * See LICENSE for the license details.
 */
declare(strict_types = 1);

namespace TESoftware\GoogleCustomerReviews\Api;

use Magento\Sales\Api\Data\OrderInterface;

/**
 * Interface EstimatedDeliveryInterface
 */
interface EstimatedDeliveryInterface
{
    /**
     * @param OrderInterface $order
     *
     * @return mixed
     */
    public function getEstimatedDelivery(OrderInterface $order): string;
}
