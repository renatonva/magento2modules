<?php
namespace Renato\StudyModule\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'renato_studymodule_post_collection';
	protected $_eventObject = 'post_collection';

    //O modelo de coleção é considerado um modelo de recursos que nos permite filtrar e buscar os dados de uma tabela de coleção. 

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Renato\StudyModule\Model\Post', 'Renato\StudyModule\Model\ResourceModel\Post');
	}

}