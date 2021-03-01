<?php
/**
 * Copyright © 28Software (https://28software.com)
 * See LICENSE for the license details.
 */
declare(strict_types = 1);

namespace TESoftware\GoogleCustomerReviews\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class SurveyPosition
 */
class SurveyPosition implements OptionSourceInterface
{
    /**
     * @return string[][]
     */
    public function toOptionArray(): array
    {
        return [
            ['label' => 'CENTER_DIALOG', 'value' => 'CENTER_DIALOG'],
            ['label' => 'BOTTOM_RIGHT_DIALOG', 'value' => 'BOTTOM_RIGHT_DIALOG'],
            ['label' => 'BOTTOM_LEFT_DIALOG', 'value' => 'BOTTOM_LEFT_DIALOG'],
            ['label' => 'TOP_RIGHT_DIALOG', 'value' => 'TOP_RIGHT_DIALOG'],
            ['label' => 'TOP_LEFT_DIALOG', 'value' => 'TOP_LEFT_DIALOG'],
            ['label' => 'BOTTOM_TRAY', 'value' => 'BOTTOM_TRAY'],
        ];
    }
}
