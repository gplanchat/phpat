<?php

namespace Tests\PHPat\functional\fixtures\Dependency;

use Tests\PHPat\functional\fixtures\DummyException;
use Tests\PHPat\functional\fixtures\GenericInner;
use Tests\PHPat\functional\fixtures\GenericOuter;
use Tests\PHPat\functional\fixtures\SimpleClass;
use Tests\PHPat\functional\fixtures\AnotherSimpleClass as AliasedClass;
use Tests\PHPat\functional\fixtures\Inheritance;
use Tests\PHPat\functional\fixtures\CallableArgument;
use Tests\PHPat\functional\fixtures\CallableReturn;

class DocBlock
{
    /**
     * @throws DummyException
     */
    public function doSomething()
    {
        /** @var SimpleClass[] $a */
        $a = 1;
        /** @var AliasedClass $b */
        $b = 2;
        /** @var DependencyNamespaceSimpleClass $c */
        $c = 3;
        /** @var Inheritance\InheritanceNamespaceSimpleClass $d */
        $d = 4;
    }

    /**
     * @throws \Exception
     */
    public function shouldNotBeCatched()
    {
        /** @var string $a */
        $a = 1;
        /** @var int $b */
        $b = 2;
        /** @var \int $b */
        $b = 2;
        /** @var bool $c */
        $c = 3;
        /** @var null $d */
        $d = 4;
    }

    /** @param (callable(CallableArgument): CallableReturn) $genericArgument */
    public function acceptsCallable(callable $callableArgument): void
    {

    }

    /** @param GenericOuter<GenericInner> $genericArgument */
    public function classGeneric($genericArgument): void
    {

    }

    /** @param array<GenericInner> $genericArgument */
    public function arrayGeneric($genericArgument): void
    {

    }
}