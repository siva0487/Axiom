<?php
namespace Retailinsights\ImportExport\Helper;

use Retailinsights\ImportExport\Model\Source\Factory;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\Exception\LocalizedException;

/**
 * Class Data
 * @package Retailinsights\ImportExport\Helper
 */
class Data extends AbstractHelper
{

    /**
     * Import source type factory model
     *
     * @var Factory
     */
    protected $sourceFactory;

    /**
     * Data Helper constructor
     *
     * @param Context $context
     * @param Factory $sourceFactory
     */
    public function __construct(
        Context $context,
        Factory $sourceFactory
    ) {
        $this->sourceFactory = $sourceFactory;
        parent::__construct($context);
    }

    /**
     * Prepare source type class name
     *
     * @param string $sourceType
     *
     * @return string
     */
    protected function prepareSourceClassName($sourceType)
    {
        return 'Retailinsights\ImportExport\Model\Source\Type\\' . ucfirst(strtolower($sourceType));
    }

    /**
     * Get source model by source type
     *
     * @param string $sourceType
     *
     * @return \Retailinsights\ImportExport\Model\Source\Type\AbstractType
     * @throws LocalizedException
     */
    public function getSourceModelByType($sourceType)
    {
        $sourceClassName = $this->prepareSourceClassName($sourceType);
        if ($sourceClassName && class_exists($sourceClassName)) {
            /* @var $source \Retailinsights\ImportExport\Model\Source\Type\AbstractType */
            $source = $this->getSourceFactory()->create($sourceClassName);
            return $source;
        } else {
            throw new LocalizedException(
                __("Import source type class for '" . $sourceType . "' is not exist.")
            );
        }
    }

    /**
     * Get source factory
     *
     * @return Factory
     */
    public function getSourceFactory()
    {
        return $this->sourceFactory;
    }
}
