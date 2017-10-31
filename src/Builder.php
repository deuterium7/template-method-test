<?php

namespace AlexanderZabornyi\TemplateMethodTest;

abstract class Builder
{
    protected $builds = [];

    /**
     * Сборка
     */
    final public function build()
    {
        $this->builds[] = $this->test();
        $this->builds[] = $this->lint();
        $this->builds[] = $this->assemble();
        $this->builds[] = $this->deploy();
    }

    /**
     * Показать сборщики
     *
     * @return array
     */
    public function getBuilds()
    {
        return $this->builds;
    }

    abstract public function test(): string;
    abstract public function lint(): string;
    abstract public function assemble(): string;
    abstract public function deploy(): string;
}