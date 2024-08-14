<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;

class CaffeineContentData extends Data
{
    public function __construct(
        public string $serving_size,
        public float $value
    ) {}
}
