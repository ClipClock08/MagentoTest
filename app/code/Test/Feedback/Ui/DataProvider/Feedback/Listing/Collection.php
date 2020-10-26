<?php
namespace Test\Feedback\Ui\DataProvider\Feedback\Listing;
use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;

class Collection extends SearchResult{
    protected function _initSelect()
    {
        $this->addFilterToMap('id_feedback', 'test_feedback_posts.id_feedback');
        $this->addFilterToMap('title', 'test_feedback_posts.value');
        parent::_initSelect();
    }
}
