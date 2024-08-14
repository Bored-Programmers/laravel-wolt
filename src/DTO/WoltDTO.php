<?php

namespace BoredProgrammers\Wolt\DTO;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;

class WoltDTO extends Data
{

    public function __construct(
        public string $currency,
        public string $primary_language,
        #[DataCollectionOf(CategoryData::class)]
        public array|Collection $categories,
    )
    {
    }

}
