<?php

namespace Rwionczek\Pagilla\Component;

use Rwionczek\Pagilla\Component;

class Link extends Component
{
    public function __construct(
        private string $href,
        private Component $child,
    ) {}

    public function build(): Component
    {
        return new Raw(
            'a',
            attributes: [
                'href' => $this->href,
            ],
            children: [$this->child],
        );
    }
}
