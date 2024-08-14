<?php

namespace BoredProgrammers\Wolt\DTO;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;

class WeeklyAvailability extends Data
{

    public function __construct(
        public string $opening_day,
        public string $opening_time,
        public string $closing_day,
        public string $closing_time,
    )
    {
    }

}