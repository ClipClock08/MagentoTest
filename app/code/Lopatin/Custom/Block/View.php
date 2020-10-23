<?php

namespace Lopatin\Custom\Block;

use Magento\Catalog\Model\ProductRepository;
use Magento\Framework\View\Element\Template;

class View extends Template
{
    /**
     * @var ProductRepository
     */
    protected $_productRepository;

    public function __construct(
        Template\Context $context,
        ProductRepository $productRepository,
        array $data = []
    )
    {
        $this->_productRepository = $productRepository;
        parent::__construct($context, $data);
    }

    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getProductById($productID)
    {
        return $this->_productRepository->getById($productID);
    }
}
