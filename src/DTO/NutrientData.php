<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;

class NutrientData extends Data
{
    public function __construct(
        public string $unit,
        public float $value
    ) {}
}
