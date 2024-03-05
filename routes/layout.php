<?php

declare(strict_types=1);

use Zenith\Components\Dependencies;
use Zenith\Components\Document;
use Mosaic\Renderer;

return fn($children, Renderer $renderer, array $params, array $queryParams) => new Document(
    lang: 'de',
    children: [
        $renderer->fragment('<h1>Welcome to your new app</h1>'),
        $children
    ],
    dependencies: new Dependencies(
        scripts: [],
        stylesheets: ['/styles.css']
    ),
    title: 'New app',
    description: 'This is a new app.',
);
