<?php

namespace Brander\CustomAttr\Model\Attribute\Backend;

use Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend;
use Magento\Framework\Exception\LocalizedException;

class Material extends AbstractBackend
{
    public function validate($object)
    {
        $value = $object->getData($this->getAttribute()->getAttributeCode());
        if (($object->getAttributeSetId() == 4) && $value == 'value 2') {
            throw new LocalizedException(__('Botton must not use with Option 2'));
        }
        return true;
    }
}
