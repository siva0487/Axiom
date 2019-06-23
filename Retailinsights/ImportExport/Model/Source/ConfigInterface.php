<?php
/**
 * @copyright: Copyright © 2015 Retailinsights Studio. All rights reserved.
 * @author: Retailinsights Studio <fbeardev@gmail.com>
 */

namespace Retailinsights\ImportExport\Model\Source;

interface ConfigInterface
{
    /**
     * Get configuration of source type by name
     *
     * @param string $name
     * @return array
     */
    public function getType($name);
}