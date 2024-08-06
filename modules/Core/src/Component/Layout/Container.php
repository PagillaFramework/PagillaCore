<?php
declare(strict_types=1);

namespace Pagilla\Core\Component\Layout;

use Pagilla\Core\Component\Component;
use Pagilla\Core\Html\HtmlElementNode;
use Pagilla\Core\Html\HtmlNode;

class Container extends Component
{
    public function __construct(
        private Component $child
    ) {}

    public function render(): HtmlNode
    {
        return new HtmlElementNode(
            'div',
            children: [$this->child->render()],
        );
    }
}
