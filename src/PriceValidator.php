<?php
namespace edofre\validators;

/**
 * Class PriceValidator
 * @package edofre\validators
 */
class PriceValidator extends \yii\validators\RegularExpressionValidator
{
    /** @var string */
    public $pattern = '/^[0-9]*[.,]{0,1}[0-9]{0,2}$/';
    /** @var string */
    public $message = 'Price has to be 12,10 or 12.10';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->message = \Yii::t('validators', $this->message);
    }
}