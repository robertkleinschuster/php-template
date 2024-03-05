<?php

declare(strict_types=1);

use Zenith\Components\Button;
use Zenith\Components\Form;
use Zenith\Components\InputGroup;
use Zenith\Plugin\Url;
use Compass\Reactive;

return #[Reactive] function () {
    yield new Form(
        action: new Url('/'),
        children: [
            new InputGroup('text', 'name', 'Enter your name to be greeted: '),
            new Button('submit', 'Submit')
        ],
    );
};
