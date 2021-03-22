<?php
namespace Renato\StudyModule\Model\ResourceModel;


class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	

    /*Como a classe de modelo, esta classe de modelo de recursos terá o método obrigatório _construct(). 
    Este método irá chamar a _init()função para definir o nome da tabela e a chave primária para essa tabela. 
    Neste exemplo, temos a tabela renato_studymodule_post a chave primária post_id.*/


	protected function _construct()
	{
		$this->_init('renato_studymodule_post', 'post_id');
	}
	
}