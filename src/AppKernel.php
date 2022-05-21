<?php
declare(strict_types=1);

namespace Pagilla\Core;

use Pagilla\Core\Component\Component;

final class AppKernel
{
    public function runApp(Component $component): void
    {
        echo $component->render();
    }
}
