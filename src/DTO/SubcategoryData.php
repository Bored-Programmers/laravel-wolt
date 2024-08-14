<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class SubcategoryData extends Data
{
    public function __construct(
        /** @var \BoredProgrammers\Wolt\DTO\TranslationData[] */
        public DataCollection $name,
        /** @var \BoredProgrammers\Wolt\DTO\TranslationData[]|null */
        public ?DataCollection $description = null,
        /** @var \BoredProgrammers\Wolt\DTO\ItemData[] */
        public DataCollection $items
    ) {}
}
