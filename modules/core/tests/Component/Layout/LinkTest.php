<?php
declare(strict_types=1);

namespace Pagilla\Core\Tests\Component\Layout;

use Pagilla\Core\Component\Layout\Link;
use Pagilla\Core\Component\Layout\Text;
use PHPUnit\Framework\TestCase;

class LinkTest extends TestCase
{
    public function test__should_return_correct_text(): void
    {
        self::assertSame(
            '<a href="https://example.com"><span>Hello World</span></a>',
            (string)(
                new Link(
                    url: 'https://example.com',
                    child: new Text('Hello World'),
                )
            )->render(),
        );
    }
}
