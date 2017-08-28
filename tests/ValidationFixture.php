<?php

namespace romi45\yii2jsonvalidator\tests;

use yii\base\Model;
use romi45\yii2jsonvalidator\JsonValidator;

/**
 * Class ValidationFixture
 *
 * @author Roman Agilov <agilovr@gmail.com>
 */
class ValidationFixture extends Model
{
    /** @var string */
    public $foo;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [['foo', JsonValidator::class]];
    }
}