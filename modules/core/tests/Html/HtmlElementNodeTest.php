<?php
declare(strict_types=1);

namespace Pagilla\Core\Tests\Html;

use Pagilla\Core\Html\HtmlAttribute;
use Pagilla\Core\Html\HtmlElementNode;
use Pagilla\Core\Html\HtmlTextNode;
use PHPUnit\Framework\TestCase;

class HtmlElementNodeTest extends TestCase
{

    public function test__should_return_correct_value_when_casted_to_string_with_xss_protection(): void
    {
        self::assertSame(
            '<div class="bg-dark" style="display: flex; flex-direction: row;">' .
                '<span class="text-center">' .
                    'Hello World' .
                    '&lt;script&gt;alert(&quot;XSS!!!&quot;);&lt;/script&gt;' .
                '</span>' .
                '<img src="https://example.com/image.png">' .
                '<input type="text" disabled>' .
            '</div>',
            (string)new HtmlElementNode(
                'div',
                [
                    new HtmlAttribute('class', 'bg-dark'),
                    new HtmlAttribute('style', 'display: flex; flex-direction: row;'),
                ],
                [
                    new HtmlElementNode(
                        'span',
                        [
                            new HtmlAttribute('class', 'text-center'),
                        ],
                        [
                            new HtmlTextNode('Hello World'),
                            new HtmlTextNode('<script>alert("XSS!!!");</script>'),
                        ],
                    ),
                    new HtmlElementNode(
                        'img',
                        [
                            new HtmlAttribute('src', 'https://example.com/image.png'),
                        ],
                        closed: false,
                    ),
                    new HtmlElementNode(
                        'input',
                        [
                            new HtmlAttribute('type', 'text'),
                            new HtmlAttribute('disabled', true),
                        ],
                        closed: false,
                    ),
                ],
            ),
        );
    }
}
