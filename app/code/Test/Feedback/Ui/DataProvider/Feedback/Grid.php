<?php

namespace Test\Feedback\Ui\DataProvider\Feedback;

use Magento\Ui\DataProvider\AbstractDataProvider;
use Magento\Ui\DataProvider\AddFieldToCollectionInterface;
use Magento\Ui\DataProvider\AddFilterToCollectionInterface;

/**
 * Class Grid
 * @package Test\Feedback\Ui\DataProvider\Feedback
 */
class Grid extends AbstractDataProvider
{
    /**
     * @access  protected
     * @var     AddFieldToCollectionInterface[]
     */
    protected $addFieldStrategies;

    /**
     * @access  protected
     * @var     AddFilterToCollectionInterface[]
     */
    protected $addFilterStrategies;


}
