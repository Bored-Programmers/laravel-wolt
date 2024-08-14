<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CategoryData extends Data
{
    public function __construct(
        public string $id,
        /** @var \BoredProgrammers\Wolt\DTO\TranslationData[] */
        public DataCollection $name,
        /** @var \BoredProgrammers\Wolt\DTO\TranslationData[]|null */
        public ?DataCollection $description = null,
        /** @var \BoredProgrammers\Wolt\DTO\SubcategoryData[] */
        public DataCollection $subcategories
    ) {}
}
