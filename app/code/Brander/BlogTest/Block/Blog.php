<?php

namespace Brander\BlogTest\Block;

use Brander\BlogTest\Model\ResourceModel\Post\CollectionFactory;
use Magento\Framework\View\Element\Template;

class Blog extends Template
{
    protected $_blogCollection;

    public function __construct(Template\Context $context, CollectionFactory $collectionFactory, array $data = [])
    {
        $this->_blogCollection = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getBlogCollection()
    {
        $collection = $this->_blogCollection->create();
        return $collection;
    }
}
