<?php

namespace Rwionczek\Pagilla\Component;

use RuntimeException;
use Rwionczek\Pagilla\Component;

class Column extends Component
{
    public function __construct(
        private array $children = [],
    ) {}

    public function build(): Component
    {
        return new Raw(
            'div',
            attributes: [
                'style' => 'display: flex; flex-direction: column;',
            ],
            children: $this->children,
        );
    }
}
