<?php

namespace Lopatin\Test01\Controller\Index;

use Magento\Framework\Controller\Result;
use Magento\Framework\Controller\ResultFactory;

class Action extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
        /** @var Result\Json $jsonResult */
        $jsonResult = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $jsonResult->setData([
            'message' => 'My First Page'
        ]);
        return $jsonResult;
    }
}
