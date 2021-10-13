<?php

namespace Rwionczek\Pagilla;

final class AppKernel
{
    public function runApp(Component $component): void
    {
        echo $component;
    }
}
