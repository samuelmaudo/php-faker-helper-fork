<?php

declare(strict_types=1);

use Hereldar\FakerHelper\Factory;
use Hereldar\FakerHelper\Generator;

if (!function_exists('fake')) {
    /**
     * @param ?non-empty-string $locale
     */
    function fake(?string $locale = null): Generator
    {
        return Factory::make($locale);
    }
}
