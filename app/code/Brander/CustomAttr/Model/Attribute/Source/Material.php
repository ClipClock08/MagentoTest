<?php

namespace Brander\CustomAttr\Model\Attribute\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Material extends AbstractSource
{
    public function getAllOptions()
    {
        if (!$this->_options){
            $this->_options = [
                ['label' => __('Option 1'), 'value' => 'value 1'],
                ['label' => __('Option 2'), 'value' => 'value 2'],
                ['label' => __('Option 3'), 'value' => 'value 3'],
                ['label' => __('Option 4'), 'value' => 'value 4'],
                ['label' => __('Option 5'), 'value' => 'value 5'],
                ['label' => __('Option 6'), 'value' => 'value 6']
            ];
        }
        return $this->_options;
    }
}
