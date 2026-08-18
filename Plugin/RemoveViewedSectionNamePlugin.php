<?php

declare(strict_types=1);

namespace CustomGento\RemoveViewedProducts\Plugin;

use Magento\Customer\CustomerData\SectionPool;

class RemoveViewedSectionNamePlugin
{
    /**
     *
     * @param SectionPool $sectionPool
     * @param string[] $result
     * @return list<string>
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterGetSectionNames(SectionPool $sectionPool, array $result): array
    {
        $result = array_diff($result, ['recently_viewed_product']);

        return array_values($result);
    }
}
