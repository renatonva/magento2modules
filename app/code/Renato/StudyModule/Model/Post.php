<?php
namespace Renato\StudyModule\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'renato_studymodule_post';

	protected $_cacheTag = 'renato_studymodule_post';

	protected $_eventPrefix = 'renato_studymodule_post';

	protected function _construct()
	{
		$this->_init('Renato\StudyModule\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}