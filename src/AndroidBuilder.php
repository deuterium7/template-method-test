<?php

namespace AlexanderZabornyi\TemplateMethodTest;

class AndroidBuilder extends Builder
{
    /**
     * Провести тестирование
     *
     * @return string
     */
    public function test(): string
    {
        return 'Выполнение Android-тестов';
    }

    /**
     * Провести линтинг
     *
     * @return string
     */
    public function lint(): string
    {
        return 'Линтинг Android-кода';
    }

    /**
     * Создать сборку
     *
     * @return string
     */
    public function assemble(): string
    {
        return 'Создание Android-сборки';
    }

    /**
     * Развернуть сборку на сервере
     *
     * @return string
     */
    public function deploy(): string
    {
        return 'Развёртывание Android-сборки на сервере';
    }


}