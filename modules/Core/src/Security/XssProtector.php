<?php
declare(strict_types=1);

namespace Pagilla\Core\Security;

class XssProtector
{
    public static function filterString(string $string): string
    {
        return htmlspecialchars($string);
    }
}
