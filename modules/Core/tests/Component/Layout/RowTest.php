<?php
declare(strict_types=1);

namespace Pagilla\Core\Tests\Component\Layout;

use Pagilla\Core\Component\Layout\Row;
use Pagilla\Core\Component\Layout\Text;
use PHPUnit\Framework\TestCase;

class RowTest extends TestCase
{
    public function test__should_render_multiple_texts(): void
    {
        self::assertSame(
        '<div style="display: flex; flex-direction: row;">' .
                '<span>Hello World</span>' .
                '<span>World Hello</span>' .
            '</div>',
            (string)(new Row(
                children: [
                    new Text('Hello World'),
                    new Text('World Hello'),
                ],
            ))->render(),
        );
    }
}
