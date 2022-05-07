<?php
declare(strict_types=1);

namespace PagillaFramework\PagillaCore;

final class AppKernel
{
    public function runApp(Component $component): void
    {
        echo $component;
    }
}
