<?php

namespace Lopatin\Custom\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\View\Result\PageFactory;

class View extends Action
{
    /**
     * @var PageFactory
     */
    protected $_resultPageFactory;

    /**
     * @var JsonFactory
     */
    protected $_resultJsonFactory;

    /**
     * View constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     * @param JsonFactory $jsonFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        JsonFactory $jsonFactory
    )
    {
        $this->_resultPageFactory = $pageFactory;
        $this->_resultJsonFactory = $jsonFactory;

        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->_resultJsonFactory->create();
        $resultPage = $this->_resultPageFactory->create();

        //$currentProductId = $this->getRequest()->getParam('currentproduct');
        $data = array('currentproductid' => 11);

        $block = $resultPage->getLayout()
            ->CreateBlock('Lopatin\Custom\Block\View')
            ->setTemplate('Lopatin_Custom::view.phtml')
            ->setData('data', $data)
            ->toHtml();
        $result->setData(['output' => $block]);
        return $result;
    }
}
