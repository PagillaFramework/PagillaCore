<?php
declare(strict_types=1);

namespace Pagilla\Core\Html;

use Pagilla\Core\Security\XssProtector;

class HtmlTextNode implements HtmlNode
{
    public function __construct(
        private string $text,
    ) {}

    public function __toString(): string
    {
        return XssProtector::filterString($this->text);
    }
}
