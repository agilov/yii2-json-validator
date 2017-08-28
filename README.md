# Yii 2 JSON Validator

[![Build Status](https://travis-ci.org/romi45/yii2-json-validator.svg)](https://travis-ci.org/romi45/yii2-json-validator)

A Yii2 extension that provides JSON validation

## Installation

```
$ composer require romi45/yii2-json-validator
```

## Usage

Model class example:

```php
<?php

namespace app\models;

use Yii;
use yii\base\Model;
use romi45\yii2jsonvalidator\JsonValidator;

class MyModel extends Model
{
    public $json;

    public function rules()
    {
        return [
            [
                'property_to_validate',
                JsonValidator::class,
                'invalidJsonMsg' => 'OMG!!! this is a custom error message!'
            ]
        ];
    }
}
```

View public properties in class
[JsonValidator](https://github.com/romi45/yii2-json-validator/blob/master/JsonValidator.php)
to get info about all available options.