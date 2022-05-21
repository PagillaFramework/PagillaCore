<?php
declare(strict_types=1);

namespace Pagilla\Core\Tests\Component\Layout;

use Pagilla\Core\Component\Layout\Column;
use Pagilla\Core\Component\Layout\Container;
use Pagilla\Core\Component\Layout\Text;
use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{
    public function test__should_render_text(): void
    {
        self::assertSame(
            '<div>' .
                '<span>Hello World</span>' .
            '</div>',
            (string)(new Container(
                new Text('Hello World'),
            ))->render(),
        );
    }
}
