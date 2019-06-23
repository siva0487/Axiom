<?php
/**
 * @copyright: Copyright © 2015 Retailinsights Studio. All rights reserved.
 * @author: Retailinsights Studio <fbeardev@gmail.com>
 */

namespace Retailinsights\ImportExport\Model\Source;

/**
 * Class Config
 * @package Retailinsights\ImportExport\Model\Source
 */
class Config extends \Magento\Framework\Config\Data implements \Retailinsights\ImportExport\Model\Source\ConfigInterface
{

    /**
     * @param Config\Reader                            $reader
     * @param \Magento\Framework\Config\CacheInterface $cache
     * @param string                                   $cacheId
     */
    public function __construct(
        \Retailinsights\ImportExport\Model\Source\Config\Reader $reader,
        \Magento\Framework\Config\CacheInterface $cache,
        $cacheId = 'Retailinsights_importexport_config'
    ) {
        parent::__construct($reader, $cache, $cacheId);
    }

    /**
     * Get system configuration of source type by name
     *
     * @param string $name
     * @return array|mixed|null
     */
    public function getType($name)
    {
        return $this->get('type/' . $name, []);
    }
}