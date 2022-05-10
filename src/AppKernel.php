<?php
declare(strict_types=1);

namespace Pagilla\Core;

final class AppKernel
{
    public function runApp(Component $component): void
    {
        echo $component;
    }
}
