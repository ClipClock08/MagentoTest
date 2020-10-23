<?php

namespace Lopatin\Test01\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class ProductViewModel implements ArgumentInterface
{
    public function getTetsString()
    {
        return 'test string';
    }
}
