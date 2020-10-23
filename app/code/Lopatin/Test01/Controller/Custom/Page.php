<?php

namespace Lopatin\Test01\Controller\Custom;

use Magento\Framework\Controller\ResultFactory;

class Page extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
        /** @var \Magento\Framework\View\Result\Page $resultPage */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $block = $page->getLayout()->getBlock('test01.first.layout.example');
        $block->setData('custom_parametr','Some text or parametr');
        return $page;
    }
}
