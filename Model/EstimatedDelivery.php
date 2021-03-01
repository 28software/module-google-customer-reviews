<?php
/**
 * Copyright © 28Software (https://28software.com)
 * See LICENSE for the license details.
 */
declare(strict_types = 1);

namespace TESoftware\GoogleCustomerReviews\Model;

use Magento\Sales\Api\Data\OrderInterface;
use TESoftware\GoogleCustomerReviews\Api\EstimatedDeliveryInterface;

/**
 * Class EstimatedDelivery
 */
class EstimatedDelivery implements EstimatedDeliveryInterface
{
    /**
     * @var Config
     */
    protected $config;

    /**
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param OrderInterface $order
     *
     * @return string
     * @throws \Exception
     */
    public function getEstimatedDelivery(OrderInterface $order): string
    {
        $orderDate = $order->getCreatedAt();

        $estimatedDeliveryDays = $this->config->getEstimatedDeliveryDays();

        $dateObject = new \DateTime($orderDate);
        $dateObject->modify("+{$estimatedDeliveryDays} days");

        return $dateObject->format("Y-m-d");
    }
}
