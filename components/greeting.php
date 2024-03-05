<?php

declare(strict_types=1);

use Mosaic\Fragment;

return fn(string $greeting) => new Fragment("<p style='font-weight: bold'>$greeting</p>");
