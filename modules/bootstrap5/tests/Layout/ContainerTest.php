<?php

namespace Pagilla\Bootstrap5\Tests\Layout;

use Pagilla\Bootstrap5\Layout\Container;
use Pagilla\Core\Component\Layout\Column;
use Pagilla\Core\Component\Layout\Text;
use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{
    public function test__should_render_base_component(): void
    {
        self::assertSame(
            '<div class="container">' .
            '</div>',
            (string)(new Container())->render(),
        );
    }
}
