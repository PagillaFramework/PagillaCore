<?php
declare(strict_types=1);

namespace Pagilla\Core\Component\Layout;

use Pagilla\Core\Component\Component;
use Pagilla\Core\Html\HtmlElementNode;
use Pagilla\Core\Html\HtmlNode;
use Pagilla\Core\Html\HtmlTextNode;

class Text extends Component
{
    public function __construct(
        private string $text,
    ) {}

    public function render(): HtmlNode
    {
        return new HtmlElementNode(
            'span',
            children: [new HtmlTextNode($this->text)],
        );
    }
}
