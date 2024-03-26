<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait Address
{
    /**
     * @return non-empty-string
     *
     * @example 'town'
     */
    public function citySuffix(): string
    {
        return $this->fakerGenerator->citySuffix();
    }

    /**
     * @return non-empty-string
     *
     * @example 'Avenue'
     */
    public function streetSuffix(): string
    {
        return $this->fakerGenerator->streetSuffix();
    }

    /**
     * @return non-empty-string
     *
     * @example '791'
     */
    public function buildingNumber(): string
    {
        return $this->fakerGenerator->buildingNumber();
    }

    /**
     * @return non-empty-string
     *
     * @example 'Sashabury'
     */
    public function city(): string
    {
        return $this->fakerGenerator->city();
    }

    /**
     * @return non-empty-string
     *
     * @example 'Crist Parks'
     */
    public function streetName(): string
    {
        return $this->fakerGenerator->streetName();
    }

    /**
     * @return non-empty-string
     *
     * @example '791 Crist Parks'
     */
    public function streetAddress(): string
    {
        return $this->fakerGenerator->streetAddress();
    }

    /**
     * @return non-empty-string
     *
     * @example 86039-9874
     */
    public function postcode(): string
    {
        return $this->fakerGenerator->postcode();
    }

    /**
     * @return non-empty-string
     *
     * @example '791 Crist Parks, Sashabury, IL 86039-9874'
     */
    public function address(): string
    {
        return $this->fakerGenerator->address();
    }

    /**
     * @return non-empty-string
     *
     * @example 'Japan'
     */
    public function country(): string
    {
        return $this->fakerGenerator->country();
    }

    /**
     * Uses signed degrees format (returns a float number between -90 and 90).
     *
     * @param float|int $min
     * @param float|int $max
     *
     * @example '77.147489'
     */
    public function latitude($min = -90, $max = 90): float
    {
        return $this->fakerGenerator->latitude($min, $max);
    }

    /**
     * Uses signed degrees format (returns a float number between -180 and 180).
     *
     * @example '86.211205'
     */
    public function longitude(float|int $min = -180, float|int $max = 180): float
    {
        return $this->fakerGenerator->longitude($min, $max);
    }

    /**
     * @return float[]
     *
     * @example array('77.147489', '86.211205')
     */
    public function localCoordinates(): array
    {
        return $this->fakerGenerator->localCoordinates();
    }
}
