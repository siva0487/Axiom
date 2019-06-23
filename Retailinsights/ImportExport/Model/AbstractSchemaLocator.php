<?php
/**
 * @copyright: Copyright © 2017 Retailinsights Studio. All rights reserved.
 * @author   : Retailinsights Studio <fbeardev@gmail.com>
 */

namespace Retailinsights\ImportExport\Model;

use Magento\Framework\Config\SchemaLocatorInterface;

class AbstractSchemaLocator implements SchemaLocatorInterface
{
    /**
     * Path to corresponding XSD file with validation rules for merged config
     *
     * @var string
     */
    protected $schema = null;

    /**
     * AbstractSchemaLocator constructor.
     * @param \Magento\Framework\Module\Dir\Read $
     */
    public function __construct(
        \Magento\Framework\Module\Dir\Reader $moduleReader,
        $fileName = null
    ) {
        $etcDir = $moduleReader->getModuleDir('etc', 'Retailinsights_ImportExport');
        $this->schema = $etcDir . '/' . $fileName;
    }

    /**
     * Get path to merged config schema
     *
     * @return string
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Get path to pre file validation schema
     *
     * @return string
     */
    public function getPerFileSchema()
    {
        return $this->schema;
    }
}
