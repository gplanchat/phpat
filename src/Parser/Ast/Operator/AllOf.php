<?php declare(strict_types=1);

namespace PhpAT\Parser\Ast\Operator;

use PhpAT\Parser\Ast\ClassLike;

final class AllOf implements ClassLike
{
    /** @var ClassLike */
    private array $constraints;

    public function __construct(
        ClassLike ...$constraints,
    ) {
        $this->constraints = $constraints;
    }

    public function matches(string $name): bool
    {
        foreach ($this->constraints as $constraint) {
            if ($constraint->matches($name) === false) {
                return false;
            }
        }

        return true;
    }

    public function getMatchingNodes(array $nodes): array
    {
        return array_merge(
            [],
            ...array_map(
                fn (ClassLike $constraint) => $constraint->getMatchingNodes($nodes),
                $this->constraints,
            )
        );
    }

    public function toString(): string
    {
        return implode(' and ', array_map(
            fn (ClassLike $constraint) => $constraint->toString(),
            $this->constraints,
        ));
    }
}
