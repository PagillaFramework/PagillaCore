<?php
declare(strict_types=1);

namespace Pagilla\Core\Component;

use Pagilla\Core\Html\HtmlAttribute;
use Pagilla\Core\Html\HtmlElementNode;
use Pagilla\Core\Html\HtmlNode;
use Pagilla\Core\Html\HtmlTextNode;

class WebApp extends Component
{
    public function __construct(
        private string $lang = 'en',
        private string $title = 'Pagilla Web App',
        private ?Component $child = null,
    ) {}

    public function render(): HtmlNode
    {
        return new HtmlElementNode(
            'html',
            attributes: [
                new HtmlAttribute('lang', $this->lang),
            ],
            children: [
                new HtmlElementNode(
                    'head',
                    children: [
                        new HtmlElementNode(
                            'meta',
                            attributes: [
                                new HtmlAttribute('charset', 'utf-8'),
                            ],
                            closed: false,
                        ),
                        new HtmlElementNode(
                            'meta',
                            attributes: [
                                new HtmlAttribute('name', 'viewport'),
                                new HtmlAttribute('content', 'width=device-width, initial-scale=1'),
                            ],
                            closed: false,
                        ),
                        new HtmlElementNode(
                            'title',
                            children: [
                                new HtmlTextNode($this->title),
                            ],
                        ),
                    ],
                ),
                new HtmlElementNode(
                    'body',
                    children: $this->child ? [
                        $this->child->render(),
                    ] : [],
                )
            ],
        );
    }
}
