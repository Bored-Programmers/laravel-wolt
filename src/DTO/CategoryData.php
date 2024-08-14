<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CategoryData extends Data
{

    public function __construct(
        /** @var TranslationData[] */
        public DataCollection $name,
        /** @var SubcategoryData[] */
        public DataCollection $subcategories,
        /** @var TranslationData[]|null */
        public ?DataCollection $description = null,
    )
    {
    }

}
