<?php

namespace Pagilla\Core\Component\Html;

use Pagilla\Core\Component\Component;
use Pagilla\Core\Html\HtmlAttribute;
use Pagilla\Core\Html\HtmlElementNode;
use Pagilla\Core\Html\HtmlNode;

abstract class HtmlComponent extends Component
{
    protected const ELEMENT = null;

    protected array $attributes = [];

    public function __construct(
        private readonly array $children = [],
        private readonly array $globalAttributes = [],
        private readonly array $eventAttributes = [],
        private readonly array $dataAttributes = [],
    ) {
        array_map(
            fn (GlobalAttribute $attribute) => $this->attributes[] = new HtmlAttribute(
                $attribute->name,
                $attribute->value,
            ),
            $this->globalAttributes,
        );

        array_map(
            fn (EventAttributes $attribute) => $this->attributes[] = new HtmlAttribute(
                $attribute->name,
                $attribute->value,
            ),
            $this->eventAttributes,
        );

        array_map(
            fn (DataAttribute $attribute) => $this->attributes[] = new HtmlAttribute(
                'data-' . $attribute->name,
                $attribute->value,
            ),
            $this->dataAttributes,
        );
    }

    public function render(): HtmlNode
    {
        return new HtmlElementNode(
            static::ELEMENT,
            [
                new HtmlAttribute('style', 'display: flex; flex-direction: column;'),
            ],
            array_map(
                static fn(Component $component) => $component->render(),
                $this->children,
            ),
        );
    }
}
