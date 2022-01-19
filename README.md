# Remove Viewed Products for Magento 2
Remove Viewed Products for Magento 2 removes the recently viewed products feature completely from Magento. Theoretically, this is as easy as removing all recently viewed products blocks from the layout. However, even when all blocks are removed, Magento still adds cookies and entries to the local storage. This module also takes care that this data is not set at all.

## Description
This extension removes the recently viewed products feature completely from Magento. Theoretically, this is as easy as removing all recently viewed products blocks from the layout. However, even when all blocks are removed, Magento still adds cookies and entries to the local storage named `recently_viewed_product` and `recently_viewed_product_previous`. This module also takes care that this data is not set at all, which helps with GDPR / cookie compliance.

## Installation
- `composer require customgento/module-remove-viewed-products-m2`
- `bin/magento module:enable CustomGento_RemoveViewedProducts`
- `bin/magento setup:upgrade`
- `bin/magento setup:di:compile`
- `bin/magento cache:flush`

## Configuration
There is no configuration.

## Copyright
&copy; 2020 CustomGento GmbH
