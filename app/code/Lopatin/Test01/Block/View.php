<?php

namespace Lopatin\Test01\Block;

use Magento\Framework\View\Element\Template;

class View extends Template
{
    public function getAjaxUrl()
    {
        return $this->getUrl('*/*/action');
    }
}
