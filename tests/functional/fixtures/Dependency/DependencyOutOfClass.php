<?php

namespace Tests\PHPat\functional\fixtures\Dependency;

if ('hello' === \Tests\PHPat\functional\php7\fixtures\SimpleClass::class) {
    echo 'bye';
}

class DependencyOutOfClass
{
}