<?php
/**
 * @copyright: Copyright © 2017 Retailinsights Studio. All rights reserved.
 * @author   : Retailinsights Studio <fbeardev@gmail.com>
 */

namespace Retailinsights\ImportExport\Model\Source\Menu;

/**
 * Class Config
 * @package Retailinsights\ImportExport\Model\Source
 */
class Config extends \Magento\Framework\Config\Data
{
    /**
     * Config constructor.
     * @param \Magento\Framework\Config\CacheInterface $cache
     * @param \Retailinsights\ImportExport\Model\AbstractReader $reader
     * @param null $cacheId
     */
    public function __construct(
        \Magento\Framework\Config\CacheInterface $cache,
        \Retailinsights\ImportExport\Model\AbstractReader $reader,
        $cacheId = null
    ) {
        parent::__construct($reader, $cache, $cacheId);
    }

    /**
     * @return array|mixed|null
     */
    public function getItems($name)
    {
        return $this->get('add/' . $name, []);
    }
}
