<?php
namespace Brander\BlogTest\Model\Blog\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class IsActive
 */
class IsActive implements OptionSourceInterface
{
    /**
     * @var \Brander\BlogTest\Model\Post
     */
    protected $blogPage;

    /**
     * Constructor
     *
     * @param \Brander\BlogTest\Model\Post $blogPage
     */
    public function __construct(\Brander\BlogTest\Model\Post $blogPage)
    {
        $this->blogPage = $blogPage;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $availableOptions = $this->blogPage->getAvailableStatuses();
        $options = [];
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}
