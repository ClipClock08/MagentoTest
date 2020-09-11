<?php

namespace Brander\BlogTest\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Brander\BlogTest\Model\Post as Blog;

class Add extends Action
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();

        $articleData = $this->getRequest()->getParam('post_id');
        if (is_array($articleData)) {
            $article = $this->_objectManager->create(Blog::class);
            $article->setData($articleData)->save();
            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('*/*/index');
        }
    }
}
