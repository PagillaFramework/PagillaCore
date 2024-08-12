<?php

namespace Pagilla\Core\Component\Html;

class GlobalAttribute
{
    public function __construct(
        public readonly GlobalAttributes $name,
        public readonly string $value,
    ) {
    }
}
