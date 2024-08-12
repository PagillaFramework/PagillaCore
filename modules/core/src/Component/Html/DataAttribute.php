<?php

namespace Pagilla\Core\Component\Html;

class DataAttribute
{
    public function __construct(
        public readonly string $name,
        public readonly string $value,
    ) {
    }
}
