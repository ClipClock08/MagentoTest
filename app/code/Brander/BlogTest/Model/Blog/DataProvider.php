<?php

namespace Brander\BlogTest\Model\Blog;

use Brander\BlogTest\Model\ResourceModel\Post\Collection;
use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider
{
    public function __construct($name, $primaryFieldName, $requestFieldName, Collection $collectionFactory, array $meta = [], array $data = [])
    {
        $this->collection = $collectionFactory;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $items = $this->collection->getItems();
        $this->loadedData = array();

        foreach ($items as $article) {
            $this->loadedData[$article->getId()]['article'] = $article->getData();
        }


        return $this->loadedData;

    }
}
