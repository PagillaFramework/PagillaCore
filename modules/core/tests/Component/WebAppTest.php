<?php
declare(strict_types=1);

namespace Pagilla\Core\Tests\Component;

use Pagilla\Core\Component\Layout\Text;
use Pagilla\Core\Component\WebApp;
use PHPUnit\Framework\TestCase;

class WebAppTest extends TestCase
{
    public function test__should_return_correct_html(): void
    {
        self::assertSame(
            '<html lang="pl">'.
                '<head>'.
                    '<meta charset="utf-8">'.
                    '<meta name="viewport" content="width=device-width, initial-scale=1">'.
                    '<title>Pagilla test web app</title>'.
                '</head>'.
                '<body>'.
                    '<span>Hello Pagilla</span>'.
                '</body>'.
            '</html>',
            (string)(
                new WebApp(
                    lang: 'pl',
                    title: 'Pagilla test web app',
                    child: new Text('Hello Pagilla'),
                )
            )->render(),
        );
    }
}
