<?php
declare(strict_types=1);

namespace Pagilla\Core\Tests\Component;

use Pagilla\Core\AppKernel;
use Pagilla\Core\Component\BaseComponent;
use PHPUnit\Framework\TestCase;

class BaseComponentTest extends TestCase
{
    private AppKernel $appKernel;

    protected function setUp(): void
    {
        $this->appKernel = new AppKernel();
    }

    public function test__runApp__should_render_single_component(): void
    {
        $this->expectOutputString('<p>Hello World</p>');

        $this->appKernel->runApp(
            new BaseComponent(
                'p',
                children: ['Hello World'],
            ),
        );
    }

    public function test__runApp__should_render_single_component_with_class(): void
    {
        $this->expectOutputString('<p class="font-weight-bold text-center">Hello World</p>');

        $this->appKernel->runApp(
            new BaseComponent(
                'p',
                attributes: [
                    'class' => 'font-weight-bold text-center',
                ],
                children: ['Hello World'],
            ),
        );
    }

    public function test__runApp__should_render_nested_components(): void
    {
        $this->expectOutputString('<div class="d-flex justify-content-center"><p class="font-weight-bold text-center">Hello World</p></div>');

        $this->appKernel->runApp(new BaseComponent(
            'div',
            attributes: [
                'class' => 'd-flex justify-content-center',
            ],
            children: [
                new BaseComponent(
                    'p',
                    attributes: [
                        'class' => 'font-weight-bold text-center',
                    ],
                    children: ['Hello World'],
                ),
            ],
        ));
    }

    public function test__runApp__should_render_multiple_nested_components(): void
    {
        $this->expectOutputString(
            preg_replace(
                '/\s\s+|\n/',
                '',
                <<<HTML
                <div class="d-flex justify-content-center">
                    <p class="font-weight-bold text-center"><strong>Hello</strong> World</p>
                    <p class="font-weight-bolder text-left">Hello World</p>
                    <p class="text-right">Hello World</p>
                </div>
                HTML
            ),
        );

        $this->appKernel->runApp(new BaseComponent(
            'div',
            attributes: [
                'class' => 'd-flex justify-content-center',
            ],
            children: [
                new BaseComponent(
                    'p',
                    attributes: [
                        'class' => 'font-weight-bold text-center',
                    ],
                    children: [
                        new BaseComponent(
                            'strong',
                            children: ['Hello'],
                        ),
                        ' ',
                        'World',
                    ],
                ),
                new BaseComponent(
                    'p',
                    attributes: [
                        'class' => 'font-weight-bolder text-left',
                    ],
                    children: ['Hello World'],
                ),
                new BaseComponent(
                    'p',
                    attributes: [
                        'class' => 'text-right',
                    ],
                    children: ['Hello World'],
                ),
            ],
        ));
    }
}
