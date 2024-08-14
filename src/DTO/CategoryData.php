<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class CategoryData extends Data
{

    public function __construct(
        /** @var TranslationData[] */
        public DataCollection $name,
        /** @var SubcategoryData[] */
        public DataCollection $subcategories,
        /** @var TranslationData[]|Optional */
        public DataCollection|Optional $description,
    )
    {
    }

}
