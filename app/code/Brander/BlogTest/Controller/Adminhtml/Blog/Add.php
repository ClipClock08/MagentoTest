<?php

namespace Brander\BlogTest\Controller\Adminhtml\Blog;

use Magento\Backend\App\Action;

class Add extends Action
{
    public function execute()
    {
        $this->_forward('edit');
    }
}
