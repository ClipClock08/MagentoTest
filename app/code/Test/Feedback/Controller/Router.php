<?php

namespace Test\Feedback\Controller;

use Magento\Framework\App\Action\Forward;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\RouterInterface;
use Magento\Framework\DataObject;
use Magento\Framework\Event\ManagerInterface;
use Test\Feedback\Helper\Config;

class Router implements RouterInterface
{
    /**
     * @access  protected
     * @var     ActionFactory
     */
    protected $_actionFactory;

    /**
     * Event manager.
     *
     * @access  protected
     * @var     ManagerInterface
     */
    protected $_eventManager;

    /**
     * @var Config
     */
    protected $_configHelper;

    public function __construct(
        ActionFactory $factory,
        ManagerInterface $eventManager,
        Config $configHelper
    )
    {
        $this->_actionFactory = $factory;
        $this->_eventManager = $eventManager;
        $this->_configHelper = $configHelper;
    }

    public function match(RequestInterface $request)
    {
        if ($this->_configHelper->isModuleEnabled()) {
            $feedbackUrlKey = $this->_configHelper->getPageUrlKey();
            $identifier = trim($request->getPathInfo(), DIRECTORY_SEPARATOR);
            $condition = new DataObject(['identifier' => $identifier, 'continuer' => true]);
            $this->_eventManager->dispatch(
                'test_feedback_controller_router_match_before',
                ['router' => $this, 'condition' => $condition]
            );
            $identifier = explode(DIRECTORY_SEPARATOR, $identifier);
            if ($feedbackUrlKey && in_array($feedbackUrlKey, $identifier)) {
                $request->setModuleName('test_feedback')->setControllerName('index')->setActionName('index');
                return $this->_actionFactory->create(Forward::class);
            }
        }
        return null;
    }
}
