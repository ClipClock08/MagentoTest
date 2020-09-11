<?php

namespace Brander\BlogTest\Model\Blog;

use Brander\BlogTest\Model\ResourceModel\Post\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider
{

    protected $collection;
    protected $_loadedData;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionBlogFactory,
        array $meta = [],
        array $data = []
    )
    {
        $this->collection = $collectionBlogFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (isset($this->_loadedData)) {
            return $this->_loadedData;
        }

        $items = $this->collection->getItems();

        foreach ($items as $article) {
            $this->_loadedData[$article->getId()] = $article->getData();
        }

        return $this->_loadedData;

    }
}
