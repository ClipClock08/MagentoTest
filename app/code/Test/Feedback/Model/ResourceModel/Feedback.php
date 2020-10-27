<?php

namespace Test\Feedback\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Feedback extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('test_feedback_posts','id_feedback');
    }
}
