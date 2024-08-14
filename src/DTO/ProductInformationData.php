<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ProductInformationData extends Data
{

    public function __construct(
        /** @var TranslationData[]|null */
        public ?DataCollection $ingredients = null,
        /** @var TranslationData[]|null */
        public ?DataCollection $additives = null,
        /** @var TranslationData[]|null */
        public ?DataCollection $nutrition_facts = null,
        /** @var TranslationData[]|null */
        public ?DataCollection $allergens = null,
        /** @var TranslationData[]|null */
        public ?DataCollection $producer_information = null,
        /** @var TranslationData[]|null */
        public ?DataCollection $distributor_information = null,
        /** @var TranslationData[]|null */
        public ?DataCollection $country_of_origin = null,
        /** @var TranslationData[]|null */
        public ?DataCollection $conditions_of_use_and_storage = null,
        public ?NutritionInformationData $nutrition_information = null
    )
    {
    }

}
