<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;

class SelectionRange extends Data
{

    public function __construct(
        public int $min,
        public int $max,
    )
    {
    }

}