<?php
namespace Renato\StudyModule\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	//O que e Pagefactory?
    /*Pagefactory é usado para inicializar o layout.

    Está funcionando no magento2 da mesma forma que no magento1 estava fazendo com o código abaixo

    $this->_view->loadLayout();

    $this->_view->renderLayout();*/ 

	protected $_pageFactory;

	protected $_postFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Renato\StudyModule\Model\PostFactory $postFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_postFactory = $postFactory;
		return parent::__construct($context);
	}

	/*public function execute()
	{
		$post = $this->_postFactory->create();
		$collection = $post->getCollection();
		foreach($collection as $item){
			echo "<pre>";
			print_r($item->getData());
			echo "</pre>";
		}
		exit();
		return $this->_pageFactory->create();
	}*/

	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Renato'));
		$this->_eventManager->dispatch('renato_studymodule_display_text', ['mp_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
	}
}