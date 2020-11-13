# Bestsellers Products

## Installation

To download the module by composer, execute this code bellow.

```sh
  composer require magezil/module-bestseller
```

### System Requirements

> **Requires at least:** 2.O
>
> **Tested up to:** 2.4.1
>
> **Requires PHP:** 7.0
>
> **Stable tag**: 1.0.0
>
> **Licenses:** OSL-3.0/AFL-3.0

---

## Magento Admin

This module provides a bestsellers products block, which insert all products that were most purchased. It is possible to show the block if customer is logged in, to edit the period to be filtered, to edit the block title and how many products will display in this block. To enable this module, follow these steps:
  - **Step 1:** Magento admin -> Stores -> Settings -> Configurations
  - **Setp 2:** Tab _Magezil_ -> Section _Bestsellers Products_ -> Group _General Configuration_
  - **Setp 3:** Enable Module = Yes

![ScreenShot](https://github.com/santanaluc94/Magezil_BoughtTogether/blob/master/Readme/en_US/img/magezil-module.jpg)

### General settings

This module provides some settings in admin:
  - **Show Logged User:** Show block only when the user is logged in;
  - **Title:** Edit title block;
  - **Qty Products Display:** Quantity of products to display on frontend (to do not apply this filter, just leave it empty).

![ScreenShot](https://github.com/santanaluc94/Magezil_BoughtTogether/blob/master/Readme/en_US/img/general-settings.jpg)

### Period settings

This module provides some settings to period to filter this block to:
  - **Period to Filter:** Group the most purchased products by period (year, month or day).
  - **From Date:** Filter start date.
  - **To Date:** Filter end date.

![ScreenShot](https://github.com/santanaluc94/Magezil_BoughtTogether/blob/master/Readme/en_US/img/period-settings.jpg)

### Cards settings

This module provides some settings to cards in this block to:
  - **Magento listing product:** Use the default Magento product listing or a custom template with the next settings.
  - **Show Wishlist:** Show button add to wishlist in list products;
  - **Show Compare:** Show button add to compare in list products;
  - **Show Qty Products	:** Show quantity products to add to cart in list products.

![ScreenShot](https://github.com/santanaluc94/Magezil_BoughtTogether/blob/master/Readme/en_US/img/cards-settings.jpg)

---

## Magento Storefront

#### Magento listing product enable:

**Product listing:**

![ScreenShot](https://github.com/santanaluc94/Magezil_BoughtTogether/blob/master/Readme/en_US/img/magento-listing.jpg)

**Product Card:**

![ScreenShot](https://github.com/santanaluc94/Magezil_BoughtTogether/blob/master/Readme/en_US/img/magento-card.jpg)

#### Magento listing product disable:

**Custom Product listing:**

![ScreenShot](https://github.com/santanaluc94/Magezil_BoughtTogether/blob/master/Readme/en_US/img/custom-listing.jpg)

**Custom Product Card (with all card settings enable):**

![ScreenShot](https://github.com/santanaluc94/Magezil_BoughtTogether/blob/master/Readme/en_US/img/custom-card.jpg)
