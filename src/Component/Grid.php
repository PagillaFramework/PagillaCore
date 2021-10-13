<?php

namespace Rwionczek\Pagilla\Component;

use Rwionczek\Pagilla\Component;

class Grid extends Component
{
    /**
     * @param Component[]|array $children
     */
    public function __construct(
        private array $children,
    ) {}

    public function build(): Component
    {
        return new Raw(
            'div',
            children: $this->children,
        );
    }
}
