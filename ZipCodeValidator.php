<?php

namespace edofre\validators;

/**
 * Class ZipCodeValidator
 * @package edofre\vallidators
 */
class ZipCodeValidator extends \yii\validators\RegularExpressionValidator
{

	/**
	 * Pattern has to be 1234AB or 1234 AB
	 * @var string
	 */
	public $pattern = '/^[0-9]{4} {0,1}[a-z|A-Z]{2}$/';

	/**
	 * @var string
	 */
	public $message = 'Zip code has to be 1234AB or 1234 AB';

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();
		$this->message = \Yii::t('validators', $this->message);
	}

}