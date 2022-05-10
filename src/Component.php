<?php
declare(strict_types=1);

namespace Pagilla\Core;

abstract class Component
{
    abstract public function build(): Component;

    public function __toString(): string
    {
        return (string)$this->build();
    }
}
