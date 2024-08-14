<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class SubcategoryData extends Data
{

    public function __construct(
        /** @var TranslationData[] */
        public DataCollection $name,
        /** @var ItemData[] */
        public DataCollection $items,
        /** @var TranslationData[]|null */
        public ?DataCollection $description = null,
    )
    {
    }

}
