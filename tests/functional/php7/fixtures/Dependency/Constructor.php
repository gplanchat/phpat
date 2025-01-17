<?php

namespace Tests\PhpAT\functional\php7\fixtures\Dependency;

use Tests\PhpAT\functional\php7\fixtures\SimpleClass;
use Tests\PhpAT\functional\php7\fixtures\AnotherSimpleClass as AliasedClass;
use Tests\PhpAT\functional\php7\fixtures\Inheritance;

class Constructor
{
    public function __construct(
        SimpleClass $simpleClass,
        AliasedClass $aliasedClass,
        DependencyNamespaceSimpleClass $dependencyNamespaceSimpleClass,
        Inheritance\InheritanceNamespaceSimpleClass $inheritanceNamespaceSimpleClass
    ) {
        throw new \BadMethodCallException();
    }
}
