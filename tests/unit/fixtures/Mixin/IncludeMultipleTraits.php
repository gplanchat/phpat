<?php

declare(strict_types=1);

namespace Tests\PHPat\unit\fixtures\Mixin;

use Tests\PHPat\unit\fixtures\SimpleTrait;

class IncludeMultipleTraits
{
    use SimpleTrait;
    use MixinNamespaceSimpleTrait;
}