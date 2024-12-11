# Custom Shipment Method Module For Magento 2

    ``shipment/module-customshipment``

- [Custom Shipment Method Module For Magento 2](#custom-shipment-method-module-for-magento-2)
  - [Main Functionalities](#main-functionalities)
  - [Installation](#installation)
    - [Type 1: Zip file](#type-1-zip-file)
  - [Configuration](#configuration)


## Main Functionalities
This is a custom shipment module for magento 2. It has some configuration field such as shipment cost/price and extra charges accordinlgy product's weights. 

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Shipment`
 - Enable the module by running `php bin/magento module:enable Shipment_CustomShipment`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

