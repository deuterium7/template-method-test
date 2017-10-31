<?php

namespace AlexanderZabornyi\TemplateMethodTest;

class IosBuilder extends Builder
{
    /**
     * Провести тестирование
     *
     * @return string
     */
    public function test(): string
    {
        return 'Выполнение iOS-тестов';
    }

    /**
     * Провести линтинг
     *
     * @return string
     */
    public function lint(): string
    {
        return 'Линтинг iOS-кода';
    }

    /**
     * Создать сборку
     *
     * @return string
     */
    public function assemble(): string
    {
        return 'Создание iOS-сборки';
    }

    /**
     * Развернуть сборку на сервере
     *
     * @return string
     */
    public function deploy(): string
    {
        return 'Развёртывание iOS-сборки на сервере';
    }


}