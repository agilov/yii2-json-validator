<?php

namespace romi45\yii2jsonvalidator\tests;

use PHPUnit\Framework\TestCase;

/**
 * Class JsonValidatorTest
 * vendor/bin/phpunit tests/JsonValidatorTest
 *
 * @author Roman Agilov <agilovr@gmail.com>
 */
final class JsonValidatorTest extends TestCase
{
    /**
     * vendor/bin/phpunit --filter testInvalidJson tests/JsonValidatorTest
     */
    public function testInvalidJson()
    {
        $fixture = new ValidationFixture(['foo' => '[}']);
        $this->assertFalse($fixture->validate());
        $this->assertTrue($fixture->hasErrors('foo'));
    }

    /**
     * vendor/bin/phpunit --filter testNotString tests/JsonValidatorTest
     */
    public function testNotString()
    {
        $fixture = new ValidationFixture(['foo' => ['bar']]);
        $this->assertFalse($fixture->validate());
        $this->assertTrue($fixture->hasErrors('foo'));
    }

    /**
     * vendor/bin/phpunit --filter testValid tests/JsonValidatorTest
     */
    public function testValid()
    {
        $fixture = new ValidationFixture(['foo' => '["bar"]']);
        $this->assertTrue($fixture->validate());
    }
}
