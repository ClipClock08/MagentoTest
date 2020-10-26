<?php

namespace Tets\Feedback\Block\Adminhtml\Feedback\Grid;

use Magento\Backend\Block\Widget\Container as WidgetContainer;

/**
 * Class Container
 * @package Tets\Feedback\Block\Adminhtml\Feedback\Grid
 */
class Container extends WidgetContainer
{

    protected function _prepareLayout()
    {
        $this->buttonList->add(
            'add',
            [
                'label' => __('Add Feedback'),
                'onclick' => "setLocation('{$this->getFeedbackCreateUrl()}')",
                'class' => 'add primary'
            ]
        );
        return parent::_prepareLayout();
    }

    /**
     * Retrieve category's create url.
     *
     * @access  private
     * @return string
     */
    private function getFeedbackCreateUrl(): string
    {
        return $this->getUrl('test_feedback/*/new');
    }
}
