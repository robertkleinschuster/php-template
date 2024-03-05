<?php

declare(strict_types=1);

use App\Greeter;
use Mosaic\Renderer;

return function (Renderer $renderer, array $params) {
    $greeter = new Greeter();
    $greeting = $greeter->greet($params['name'], (int)date('H'));
    yield $renderer->render(require 'components/greeting.php', greeting: $greeting);
};