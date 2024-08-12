<?php

namespace Pagilla\Core\Component\Html;

class GlobalAttributes
{
    private array $htmlAttributes = [];

    public function __construct(
        string $onAfterPrint = null,
        string $accessKey = null,
        string $class = null,
        string $contentEditable = null,
        string $dir = null,
        string $draggable = null,
        string $enterKeyHint = null,
        string $hidden = null,
        string $id = null,
        string $inert = null,
        string $inputMode = null,
        string $lang = null,
        string $popover = null,
        string $spellcheck = null,
        string $style = null,
        string $tabIndex = null,
        string $title = null,
        string $translate = null,
    ) {
    }
}
