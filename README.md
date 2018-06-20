# Yii 2 JSON Validator

[![Build Status](https://travis-ci.org/agilov/yii2-json-validator.svg)](https://travis-ci.org/romi45/yii2-json-validator)

A Yii2 extension that provides JSON validation

## Installation

```
$ composer require romi45/yii2-json-validator ~1.1
```

## Usage example

```php
<?php

namespace app\models;

use yii\base\Model;
use romi45\yii2jsonvalidator\JsonValidator;

class Foo extends Model
{
    public $bar;

    public function rules()
    {
        return [['bar', JsonValidator::class]];
    }
}
```

View public properties in class
[JsonValidator](https://github.com/agilov/yii2-json-validator/blob/master/src/JsonValidator.php)
to get info about all available options.
