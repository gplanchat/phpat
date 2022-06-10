<?php

declare(strict_types=1);

namespace Tests\PHPat\unit\fixtures\Dependency;

class ClassDependency extends ParentClass implements ClassInterface
{
    use ClassTrait;
}

abstract class ParentClass
{
}

interface ClassInterface
{
}

trait ClassTrait
{
}