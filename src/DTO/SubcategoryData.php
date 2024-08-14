<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class SubcategoryData extends Data
{

    public function __construct(
        /** @var TranslationData[] */
        public DataCollection $name,
        /** @var ItemData[] */
        public DataCollection $items,
        /** @var TranslationData[]|Optional */
        public Optional|DataCollection $description,
        /** @var WeeklyAvailabilityData[]|Optional */
        public Optional|DataCollection $weekly_availability,
    )
    {
    }

}
