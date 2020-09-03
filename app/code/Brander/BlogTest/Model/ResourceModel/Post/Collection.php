<?php

namespace Brander\BlogTest\Model\ResourceModel\Post;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Brander\Blog\Model\Post', 'Brander\Blog\Model\Post\ResourceModel\Post');
    }
}
