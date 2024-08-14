<?php

namespace BoredProgrammers\Wolt\DTO;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;

class CategoryData extends Data
{

    public function __construct(
        #[DataCollectionOf(ItemData::class)]
        public array|Collection $items,
        #[DataCollectionOf(LanguageValueData::class)]
        public array|Collection $name,
        #[DataCollectionOf(WeeklyAvailability::class)]
        public null|array|Collection $weekly_availability = null,
    )
    {
    }

}