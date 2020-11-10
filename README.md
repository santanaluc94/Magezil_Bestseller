# Bestsellers Products

## Installation

To download the module by composer, execute this code bellow.

```sh
  composer require magezil/module-bought-together
```

### System Requirements

> **Requires at least:** 2.O
>
> **Tested up to:** 2.3
>
> **Requires PHP:** 7.0
>
> **Stable tag**: 1.0
>
> **Licenses:** OSL-3.0/AFL-3.0

---

## Magento Admin

This module provides a bestsellers products block, which insert all products that were most purchased. It is possible to edit the title and how many products will display in this block. To enable this module, follow these steps:
  - **Step 1:** Magento admin -> Stores -> Settings -> Configurations
  - **Setp 2:** Tab _Magezil_ -> Section _Bestsellers Products_ -> Group _General Configuration_
  - **Setp 3:** Enable Module = Yes

### General settings

This module provides some settings in admin:
  - Show block only when the user is logged in;
  - Edit title block;
  - Quantity of products to display on frontend (to do not apply this filter, just leave it empty).

### Cards settings

This module provides some settings to cards in this block to:
  - Use the default Magento product listing or a custom template with the next settings.
  - Show button add to wishlist in list products;
  - Show button add to compare in list products;
  - Show quantity products to add to cart in list products.





To insert this block on a page, follow theses steps:
  - Show block only when the user is logged in;
  - Edit title block;
  - Quantity of products to display on frontend (to do not apply this filter, just leave it empty).

To insert this block on a page, follow theses steps:
  - **Step 1:** Magento Admin -> Content -> Elements -> Page
  - **Step 2:** _Select your page_
  - **Step 3:** Add block in a page content
    - {{block class="Magezil\Bestseller\Block\Product\BestSellerListing"}}