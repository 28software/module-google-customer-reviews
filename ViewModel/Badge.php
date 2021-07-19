<?php
/**
 * Copyright © 28Software (https://28software.com)
 * See LICENSE for the license details.
 */
declare(strict_types = 1);

namespace TESoftware\GoogleCustomerReviews\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use TESoftware\GoogleCustomerReviews\Model\Config as Config;

/**
 * Class Badge
 */
class Badge implements ArgumentInterface
{
    /**
     * @var Config
     */
    protected $configuration;

    /**
     * Badge constructor.
     *
     * @param Config $configuration
     */
    public function __construct(Config $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return bool
     */
    public function isBadgeEnabled(): bool
    {
        return $this->configuration->isEnabled() && $this->configuration->isBadgeEnabled();
    }

    /**
     * @return int
     */
    public function getMerchantId(): int
    {
        return $this->configuration->getMerchantId();
    }

    /**
     * @return mixed
     */
    public function getBadgePosition(): string
    {
        return $this->configuration->getBadgePosition();
    }

    /**
     * @return bool
     */
    public function isDisabledForMobile(): bool
    {
        return $this->configuration->isDisabledForMobile();
    }
}
