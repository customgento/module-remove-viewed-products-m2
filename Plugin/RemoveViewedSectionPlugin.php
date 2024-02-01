<?php

declare(strict_types=1);

namespace CustomGento\RemoveViewedProducts\Plugin;

use Magento\Customer\CustomerData\SectionPoolInterface;

class RemoveViewedSectionPlugin
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterGetSectionsData(SectionPoolInterface $sectionPool, array $result): array
    {
        unset($result['recently_viewed_product']);

        return $result;
    }
}
