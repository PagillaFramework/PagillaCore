<?php
declare(strict_types=1);

namespace Pagilla\Core\Component\Layout;

use Pagilla\Core\Component\Component;
use Pagilla\Core\Html\HtmlAttribute;
use Pagilla\Core\Html\HtmlElementNode;
use Pagilla\Core\Html\HtmlNode;
use Pagilla\Core\Html\HtmlTextNode;

class Link extends Component
{
    public function __construct(
        private string $url,
        private Component $child,
    ) {}

    public function render(): HtmlNode
    {
        return new HtmlElementNode(
            'a',
            attributes: [
                new HtmlAttribute('href', $this->url),
            ],
            children: [$this->child->render()],
        );
    }
}
