<?php

namespace Rwionczek\Pagilla\Component;

use RuntimeException;
use Rwionczek\Pagilla\Component;

class Raw extends Component
{
    public function __construct(
        private string $tagName,
        private array $attributes = [],
        private array $children = [],
    ) {}

    public function build(): Component
    {
        throw new RuntimeException('Cannot build raw component');
    }

    public function __toString(): string
    {
        $renderedChildren = implode('', $this->children);

        $renderedAttributes = '';

        foreach ($this->attributes as $attributeName => $attributeValue) {
            $renderedAttributes .= " $attributeName=\"$attributeValue\"";
        }

        return "<$this->tagName$renderedAttributes>$renderedChildren</$this->tagName>";
    }
}
