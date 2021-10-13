<?php

use PHPUnit\Framework\TestCase;
use Rwionczek\Pagilla\AppKernel;
use Rwionczek\Pagilla\Component\Grid;
use Rwionczek\Pagilla\Component\Text;

class AppKernelTest extends TestCase
{
    private AppKernel $appKernel;

    protected function setUp(): void
    {
        $this->appKernel = new AppKernel();
    }

    public function test__runApp__should_render_simple_component(): void
    {
        $this->expectOutputString('<div><div>Hello World</div></div>');

        $this->appKernel->runApp(new Grid(
            children: [
                new Text('Hello World'),
            ],
        ));
    }
}
