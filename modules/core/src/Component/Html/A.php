<?php

namespace Pagilla\Core\Component\Html;

use Pagilla\Core\Component\Component;
use Pagilla\Core\Html\HtmlAttribute;
use Pagilla\Core\Html\HtmlElementNode;
use Pagilla\Core\Html\HtmlNode;

class A extends HtmlComponent
{
    public function __construct(
        private string|bool|null $download = null,
        private ?string $href = null,
        private ?string $hreflang = null,
        private ?string $media = null,
        private ?string $ping = null,
        private ?string $referrerPolicy = null,
        private ?string $rel = null,
        private ?string $target = null,
        private ?string $type = null,

        array $children = [],

        array $globalAttributes = [],
        array $eventAttributes = [],
        array $dataAttributes = [],
    ) {


        parent::__construct(
            children: $children,
            globalAttributes: $globalAttributes,
            eventAttributes: $eventAttributes,
            dataAttributes: $dataAttributes,
        );
    }
}
