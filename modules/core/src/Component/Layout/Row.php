<?php
declare(strict_types=1);

namespace Pagilla\Core\Component\Layout;

use Pagilla\Core\Component\Component;
use Pagilla\Core\Html\HtmlAttribute;
use Pagilla\Core\Html\HtmlElementNode;
use Pagilla\Core\Html\HtmlNode;

class Row extends Component
{
    public function __construct(
        private array $children,
    ) {}

    public function render(): HtmlNode
    {
        return new HtmlElementNode(
            'div',
            [
                new HtmlAttribute('style', 'display: flex; flex-direction: row;'),
            ],
            array_map(
                static fn(Component $component) => $component->render(),
                $this->children,
            ),
        );
    }
}
