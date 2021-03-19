<?php
namespace Renato\StudyModule\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

    //O que e Pagefactory?
    /*Pagefactory é usado para inicializar o layout.

    Está funcionando no magento2 da mesma forma que no magento1 estava fazendo com o código abaixo

    $this->_view->loadLayout();

    $this->_view->renderLayout();*/ 

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		return $this->_pageFactory->create();
	}
}