<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Plugin for config class.
 * Replace default magento classes.
 */
namespace Retailinsights\ImportExport\Plugin\Model\Import\Config;

/**
 * Class Data
 * @package Retailinsights\ImportExport\Plugin\Config
 */
class Converter
{
    /**
     * Convert dom node tree to array
     *
     * @param \Magento\ImportExport\Model\Import\Config\Converter $subject
     * @param                                                     $result
     *
     * @return mixed
     */
    public function afterConvert(\Magento\ImportExport\Model\Import\Config\Converter $subject, $result)
    {
        if (isset($result['entities']['catalog_product'])) {
            $productModel = 'Retailinsights\ImportExport\Model\Import\Product';
            $result['entities']['catalog_product']['model'] = $productModel;
        }
        if (isset($result['entities']['catalog_product']['types']['downloadable'])) {
            $downloadableModel = 'Retailinsights\ImportExport\Model\Import\Product\Type\Downloadable';
            $result['entities']['catalog_product']['types']['downloadable']['model'] = $downloadableModel;
        }
        return $result;
    }
}
