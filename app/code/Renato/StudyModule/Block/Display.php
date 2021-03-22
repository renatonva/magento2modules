<?php
namespace Renato\StudyModule\Block;
class Display extends \Magento\Framework\View\Element\Template
{
	protected $_postFactory;

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Renato\StudyModule\Model\PostFactory $postFactory
	)
	{
		$this->_postFactory = $postFactory;
		parent::__construct($context);
	}

	public function sayHello()
	{
		return __('Hello World');
	}

	public function getPostCollection(){
		$post = $this->_postFactory->create();
		return $post->getCollection();
	}
}