<?php
declare(strict_types=1);

namespace Pagilla\Core\Html;

class HtmlAttribute
{
    public function __construct(
        public readonly string $name,
        public readonly string|bool|null $value,
    ) {}
}
