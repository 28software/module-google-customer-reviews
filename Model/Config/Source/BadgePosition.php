<?php
/**
 * Copyright © 28Software (https://28software.com)
 * See LICENSE for the license details.
 */
declare(strict_types = 1);

namespace TESoftware\GoogleCustomerReviews\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class BadgePosition
 */
class BadgePosition implements OptionSourceInterface
{
    /**
     * @return string[][]
     */
    public function toOptionArray(): array
    {
        return [
            ['label' => 'INLINE', 'value' => 'INLINE'],
            ['label' => 'BOTTOM_RIGHT', 'value' => 'BOTTOM_RIGHT'],
            ['label' => 'BOTTOM_LEFT', 'value' => 'BOTTOM_LEFT'],
        ];
    }

}
