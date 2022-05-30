<?php
declare(strict_types=1);

namespace Pagilla\Core;

use Pagilla\Core\Component\Component;

final class AppKernel
{
    private const DOCTYPE_DECLARATION = '<!doctype html>';

    public function runApp(Component $component): void
    {
        echo self::DOCTYPE_DECLARATION . $component->render();
    }
}
