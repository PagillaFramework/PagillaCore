<?php

namespace Rwionczek\Pagilla\Component;

use Rwionczek\Pagilla\Component;

class Text extends Component
{
    public function __construct(
        private string $text,
    ) {}

    public function build(): Component
    {
        return new Raw(
            'div',
            children: [
                $this->text,
            ],
        );
    }
}
