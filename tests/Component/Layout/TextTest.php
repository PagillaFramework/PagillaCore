<?php
declare(strict_types=1);

namespace Pagilla\Core\Tests\Component\Layout;

use Pagilla\Core\Component\Layout\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function test__should_return_correct_text(): void
    {
        self::assertSame(
            '<span>Hello World</span>',
            (string)(new Text('Hello World'))->render(),
        );
    }
}
