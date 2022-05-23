<?php

namespace PHPat\Rule\Assertion\MustNotConstruct;

use PHPat\Rule\Assertion\Assertion;
use PHPat\Statement\Builder\StatementBuilderFactory;
use PHPStan\Reflection\ReflectionProvider;

abstract class MustNotConstruct extends Assertion
{
    public function __construct(StatementBuilderFactory $statementBuilderFactory, ReflectionProvider $reflectionProvider)
    {
        parent::__construct(__CLASS__, $statementBuilderFactory, $reflectionProvider);
    }

    protected function getMessage(string $subject, string $target): string
    {
        return sprintf('%s must not construct %s', $subject, $target);
    }
}