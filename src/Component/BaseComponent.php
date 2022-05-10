<?php
declare(strict_types=1);

namespace Pagilla\Core\Component;

use RuntimeException;
use Pagilla\Core\Component;

final class BaseComponent extends Component
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

        $renderedAttributes = $this->getRenderedAttributes();

        return "<$this->tagName$renderedAttributes>$renderedChildren</$this->tagName>";
    }

    private function getRenderedAttributes(): string
    {
        $renderedAttributes = '';

        foreach ($this->attributes as $attributeName => $attributeValue) {
            $renderedAttributes .= " $attributeName=\"$attributeValue\"";
        }

        return $renderedAttributes;
    }
}
