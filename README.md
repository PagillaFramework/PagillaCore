![CI build](https://github.com/PagillaFramework/PagillaCore/actions/workflows/php.yml/badge.svg)

# About

Pagilla is a PHP component engine inspired by Flutter. Create your presentation layer in pure PHP.

# Installation

```shell
composer install pagilla/core
```

# Usage

This Pagilla code:

```injectablephp
<?php

namespace MyApp\Page;

use Pagilla\Core\Component\RenderedComponent;
use Pagilla\Component\WebApp;

class HomePage extends RenderedComponent
{
    public function build(): RenderedComponent
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
renders:
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

All you need to do is to run you app in your `index.php` file:
```injectablephp
<?php

use MyApp\Page\HomePage;
use Rwionczek\Pagilla\AppKernel;

require __DIR__ . '/vendor/autoload.php';

$kernel = new AppKernel();

$kernel->runApp(new HomePage());
```
