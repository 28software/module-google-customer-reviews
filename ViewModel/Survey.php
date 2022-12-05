<?php
/**
 * Copyright © 28Software (https://28software.com)
 * See LICENSE for the license details.
 */
declare(strict_types = 1);

namespace TESoftware\GoogleCustomerReviews\ViewModel;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Checkout\Model\Session;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use TESoftware\GoogleCustomerReviews\Api\EstimatedDeliveryInterface;
use TESoftware\GoogleCustomerReviews\Model\Config;

/**
 * Class Survey
 */
class Survey implements ArgumentInterface
{
    /**
     * @var Session
     */
    private $session;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var EstimatedDeliveryInterface
     */
    private $estimatedDelivery;

    /**
     * @var Json
     */
    private $json;

    /**
     * Survey constructor.
     *
     * @param Session                    $session
     * @param Config                     $configuration
     * @param EstimatedDeliveryInterface $estimatedDelivery
     * @param Json                       $json
     */
    public function __construct(
        Session $session,
        Config $configuration,
        EstimatedDeliveryInterface $estimatedDelivery,
        Json $json
    ) {
        $this->session = $session;
        $this->config = $configuration;
        $this->estimatedDelivery = $estimatedDelivery;
        $this->json = $json;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->config->isEnabled();
    }

    /**
     * @return bool
     */
    public function isShowProductsInSurvey(): bool
    {
        return $this->config->isShowProductsInSurvey();
    }

    /**
     * @return mixed
     */
    public function getMerchantId()
    {
        return $this->config->getMerchantId();
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->config->getSurveyPosition();
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->session->getLastRealOrder()->getIncrementId();
    }

    /**
     * @return mixed
     */
    public function getCustomerEmail()
    {
        return $this->session->getLastRealOrder()->getCustomerEmail();
    }

    /**
     * @return mixed
     */
    public function getDeliveryCountry()
    {
        return $this->session->getLastRealOrder()->getShippingAddress()?->getCountryId();
    }

    /**
     * @return mixed
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->estimatedDelivery->getEstimatedDelivery($this->session->getLastRealOrder());
    }

    /**
     * @return array
     */
    public function getProductsGtinsJson()
    {
        $order = $this->session->getLastRealOrder();

        $array = [];

        /** @var ProductInterface[] $items */
        $items = $order->getAllVisibleItems();
        foreach ($items as $item) {
            $array[] = ['gtin' => $item->getSku()];
        }

        return $this->json->serialize($array);
    }
}
