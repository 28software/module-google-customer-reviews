<?php
/**
 * Copyright © 28Software (https://28software.com)
 * See LICENSE for the license details.
 */
declare(strict_types = 1);

namespace TESoftware\GoogleCustomerReviews\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Class Config
 */
class Config
{
    public const XML_ENABLED                   = "google/customer_reviews/enabled";
    public const XML_BADGE_ENABLED             = "google/customer_reviews/badge_enabled";
    public const XML_MERCHANT_ID               = "google/customer_reviews/merchant_id";
    public const XML_ESTIMATED_DELIVERY        = "google/customer_reviews/estimated_delivery_time";
    public const XML_SHOW_PRODUCTS_IN_SURVEY   = "google/customer_reviews/show_products_in_survey";
    public const XML_BADGE_POSITION            = "google/customer_reviews/badge_position";
    public const XML_SURVEY_POSITION           = "google/customer_reviews/survey_position";
    public const XML_BADGE_DISABLED_FOR_MOBILE = "google/customer_reviews/disabled_for_mobile";

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Configuration constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return (bool)$this->scopeConfig->isSetFlag(self::XML_ENABLED);
    }

    /**
     * @return bool
     */
    public function isBadgeEnabled(): bool
    {
        return (bool)$this->scopeConfig->isSetFlag(self::XML_BADGE_ENABLED);
    }

    /**
     * @return int
     */
    public function getMerchantId(): int
    {
        return (int)$this->scopeConfig->getValue(self::XML_MERCHANT_ID);
    }

    /**
     * @return int
     */
    public function getEstimatedDeliveryDays(): int
    {
        return (int)$this->scopeConfig->getValue(self::XML_ESTIMATED_DELIVERY);
    }

    /**
     * @return bool
     */
    public function isShowProductsInSurvey(): bool
    {
        return (bool)$this->scopeConfig->isSetFlag(self::XML_SHOW_PRODUCTS_IN_SURVEY);
    }

    /**
     * @return string
     */
    public function getBadgePosition(): string
    {
        return (string)$this->scopeConfig->getValue(self::XML_BADGE_POSITION);
    }

    /**
     * @return string
     */
    public function getSurveyPosition(): string
    {
        return (string)$this->scopeConfig->getValue(self::XML_SURVEY_POSITION);
    }

    /**
     * @return bool
     */
    public function isDisabledForMobile(): bool
    {
        return (bool)$this->scopeConfig->isSetFlag(self::XML_BADGE_DISABLED_FOR_MOBILE);
    }
}
