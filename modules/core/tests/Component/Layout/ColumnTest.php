<?php
declare(strict_types=1);

namespace Pagilla\Core\Tests\Component\Layout;

use Pagilla\Core\Component\Layout\Column;
use Pagilla\Core\Component\Layout\Text;
use PHPUnit\Framework\TestCase;

class ColumnTest extends TestCase
{
    public function test__should_render_multiple_texts(): void
    {
        self::assertSame(
        '<div style="display: flex; flex-direction: column;">' .
                '<span>Hello World</span>' .
                '<span>World Hello</span>' .
            '</div>',
            (string)(new Column([
                new Text('Hello World'),
                new Text('World Hello'),
            ]))->render(),
        );
    }
}
