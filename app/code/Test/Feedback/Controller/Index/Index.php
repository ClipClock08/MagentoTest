<?php

namespace Test\Feedback\Controller\Index;

use Test\Feedback\Helper\Config;
use Magento\Backend\Model\View\Result\Forward;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action implements HttpGetActionInterface, HttpPostActionInterface
{
    /**
     * @access  protected
     * @var     Config
     */
    protected $configHelper;

    /**
     * Category constructor.
     *
     * @access  public
     * @param Context $context
     * @param Config $configHelper
     */
    public function __construct(
        Context $context,
        Config $configHelper
    )
    {
        $this->configHelper = $configHelper;
        parent::__construct($context);
    }

    /**
     * {@inheritDoc}
     */
    public function execute()
    {
        if (!$this->configHelper->isModuleEnabled()) {
            /** @var Forward $resultPage */
            $resultPage = $this->resultFactory->create(ResultFactory::TYPE_FORWARD);
            return $resultPage->forward('noroute');
        }

        /** @var Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->set('Title from controller');
        return $resultPage;
    }
}
