<?php

namespace AlexanderZabornyi\TemplateMethodTest\Tests;

use AlexanderZabornyi\TemplateMethodTest\AndroidBuilder;
use AlexanderZabornyi\TemplateMethodTest\IosBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testAndroidBuilder()
    {
        $android = new AndroidBuilder();
        $android->build();
        $this->assertEquals(
            [
                'Выполнение Android-тестов',
                'Линтинг Android-кода',
                'Создание Android-сборки',
                'Развёртывание Android-сборки на сервере'
            ],
            $android->getBuilds()
        );
    }

    public function testIosBuilder()
    {
        $ios = new IosBuilder();
        $ios->build();
        $this->assertEquals(
            [
                'Выполнение iOS-тестов',
                'Линтинг iOS-кода',
                'Создание iOS-сборки',
                'Развёртывание iOS-сборки на сервере'
            ],
            $ios->getBuilds()
        );
    }
}