<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;

class WeeklyAvailabilityData extends Data
{

    public function __construct(
        public string $opening_day,
        public string $opening_time,
        public string $closing_day,
        public string $closing_time
    )
    {
    }

}
