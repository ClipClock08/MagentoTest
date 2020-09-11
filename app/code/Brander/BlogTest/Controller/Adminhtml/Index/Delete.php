<?php

namespace Brander\BlogTest\Controller\Adminhtml\Index;

use Brander\BlogTest\Model\Post as Blog;
use Magento\Backend\App\Action;
use Magento\TestFramework\Inspection\Exception;

class Delete extends Action
{
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');

        if (!($contact = $this->_objectManager->create(Blog::class)->load($id))) {
            $this->messageManager->addError(__('Unable to proceed. Please, try again.'));
            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('*/*/', array('_current' => true));
        }
        try {
            $contact->delete();
            $this->messageManager->addSuccess(__('Your article has been deleted !'));
        } catch (Exception $e) {
            $this->messageManager->addError(__('Error while trying to delete article: '));
            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('*/*/', array('_current' => true));
        }

        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('*/*/', array('_current' => true));
    }
}
