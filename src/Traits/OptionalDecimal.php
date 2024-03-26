<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalDecimal
{
    /**
     * Return a random float number.
     *
     * @example 48.8932
     */
    public function float(?int $nbMaxDecimals = null, float|int $min = 0, float|int|null $max = null): ?float
    {
        return $this->fakerGenerator->randomFloat($nbMaxDecimals, $min, $max);
    }

    /**
     * Return a random float number.
     *
     * @deprecated
     *
     * @example 48.8932
     */
    public function randomFloat(?int $nbMaxDecimals = null, float|int $min = 0, float|int|null $max = null): ?float
    {
        return $this->fakerGenerator->randomFloat($nbMaxDecimals, $min, $max);
    }
}