<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class ProductInformationData extends Data
{

    public function __construct(
        /** @var TranslationData[]|Optional */
        public Optional|DataCollection $ingredients,
        /** @var TranslationData[]|Optional */
        public Optional|DataCollection $additives,
        /** @var TranslationData[]|Optional */
        public Optional|DataCollection $nutrition_facts,
        /** @var TranslationData[]|Optional */
        public Optional|DataCollection $allergens,
        /** @var TranslationData[]|Optional */
        public Optional|DataCollection $producer_information,
        /** @var TranslationData[]|Optional */
        public Optional|DataCollection $distributor_information,
        /** @var TranslationData[]|Optional */
        public Optional|DataCollection $country_of_origin,
        /** @var TranslationData[]|Optional */
        public Optional|DataCollection $conditions_of_use_and_storage,
        public ?NutritionInformationData $nutrition_information
    )
    {
    }

}
