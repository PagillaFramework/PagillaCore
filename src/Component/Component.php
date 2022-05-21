<?php
declare(strict_types=1);

namespace Pagilla\Core\Component;

use BadMethodCallException;
use Pagilla\Core\Html\HtmlNode;

abstract class Component
{
    protected function build(): Component
    {
        $className = self::class;
        throw new BadMethodCallException("To build component `$className` with default `render` method you need to overwrite `build` method");
    }

    public function render(): HtmlNode
    {
        return $this->build()->render();
    }
}
