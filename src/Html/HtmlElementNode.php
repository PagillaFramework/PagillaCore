<?php
declare(strict_types=1);

namespace Pagilla\Core\Html;

use Pagilla\Core\Security\XssProtector;

class HtmlElementNode implements HtmlNode
{
    /**
     * @param string $name
     * @param HtmlAttribute[] $attributes
     * @param HtmlNode[] $children
     * @param bool $closed
     */
    public function __construct(
        private string $name,
        private array $attributes = [],
        private array $children = [],
        private bool $closed = true,
    ) {}

    public function __toString(): string
    {
        $name = XssProtector::filterString($this->name);

        $result = "<$name";

        foreach ($this->attributes as $attribute) {
            $result .= $this->convertAttributeToString($attribute);
        }

        $result .= ">";

        foreach ($this->children as $child) {
            $result .= $this->convertElementChildToString($child);
        }

        if ($this->closed) {
            $result .= "</$this->name>";
        }

        return $result;
    }

    private function convertAttributeToString(HtmlAttribute $attribute): string
    {
        $name = XssProtector::filterString($attribute->getName());
        $value = XssProtector::filterString($attribute->getValue());

        return " $name=\"$value\"";
    }

    private function convertElementChildToString(HtmlNode $node): string
    {
        return (string)$node;
    }
}
