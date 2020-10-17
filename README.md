### Bestsellers Products

This module provides a bestsellers products block, which insert all products that were most purchased. It is possible to edit the title and how many products will display in this block. To enable this module, follow these steps:
  - Step 1: Magento admin -> Stores -> Settings -> Configurations
  - Setp 2: Tab _Magezil_ -> Section _Bestsellers Products_ -> Group _General Configuration_
  - Setp 3: Enable Module = Yes

To insert this block on a page, follow theses steps:
  - Step 1: Magento Admin -> Content -> Elements -> Page
  - Step 2: _Select your page_
  - Step 3: Add block in a page content
    - {{block class="Magezil\Bestseller\Block\Product\BestSellerListing"}}