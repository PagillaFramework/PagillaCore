# About

Pagilla is a library for building web applications with components.
It contains many predefined components, but you can also create your custom components.

# Usage

This Pagilla code:
```injectablephp
<?php

namespace MyApp\Page;

use Rwionczek\Pagilla\Component;
use Rwionczek\Pagilla\Component\WebApp;

class HomePage extends Component
{
    public function render(): Component
    {
        return new WebApp(
            title: 'My new Pagilla web app',
            child: new Grid(
                children: [
                    new Row(
                        children: [
                            new Column(
                                children: [
                                    new Text('Column 1'),
                                ]
                            ),
                            new Column(
                                children: [
                                    new Text('Column 2'),
                                ]
                            ),
                            new Column(
                                children: [
                                    new Text('Column 3'),
                                ]
                            ),
                        ],
                    ),
                ],
            ),
        );
    }
}
```
compiles to:
```html
<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>My new Pagilla web app</title>
    </head>
    <body>
        <div>
            <div style="display: flex; flex-direction: row;">
                <div style="display: flex: flex-direction: column">
                    <div>
                        Column 1
                    </div>
                </div>
                <div style="display: flex: flex-direction: column">
                    <div>
                        Column 2
                    </div>
                </div>
                <div style="display: flex: flex-direction: column">
                    <div>
                        Column 3
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
```

All you need to do is to run you app:
```injectablephp
<?php

use MyApp\Page\HomePage;
use Rwionczek\Pagilla\AppKernel;

require __DIR__ . '/vendor/autoload.php';

$kernel = new AppKernel();

$kernel->runApp(new HomePage());
```