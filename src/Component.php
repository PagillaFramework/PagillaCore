<?php

namespace Rwionczek\Pagilla;

abstract class Component
{
    abstract public function build(): Component;

    public function __toString(): string
    {
        return $this->build();
    }
}
