<?php

namespace Brander\BlogTest\Model\ResourceModel\Post;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Brander\BlogTest\Model\Post', 'Brander\BlogTest\Model\ResourceModel\Post');
    }
}
