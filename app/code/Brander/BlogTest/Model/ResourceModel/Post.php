<?php

namespace Brander\BlogTest\Model\ResourceModel;

class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('brander_blog_post', 'post_id');
    }
}
