<?php

namespace Test\Feedback\Model;

use Magento\Framework\Model\AbstractModel;

class Feedback extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Test\Feedback\Model\ResourceModel\Feedback');
    }
}
