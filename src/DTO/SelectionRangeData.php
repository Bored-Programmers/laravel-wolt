<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;

class SelectionRangeData extends Data
{
    public function __construct(
        public int $min,
        public int $max
    ) {}
}
