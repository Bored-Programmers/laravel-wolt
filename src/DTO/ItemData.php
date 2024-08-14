<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class ItemData extends Data
{

    public function __construct(
        /** @var TranslationData[] */
        public DataCollection $name,
        public ?string $image_url,
        public float $price,
        public float $sales_tax_percentage,
        public bool $enabled,
        /** @var string[] */
        public array $delivery_methods,
        /** @var TranslationData[]|Optional */
        public DataCollection $description,
        public Optional|float $alcohol_percentage,
        public Optional|CaffeineContentData $caffeine_content,
        /** @var WeeklyAvailabilityData[]|null */
        public Optional|DataCollection $weekly_availability,
        /** @var WeeklyVisibilityData[]|null */
        public Optional|DataCollection $weekly_visibility,
        /** @var OptionData[]|null */
        public Optional|DataCollection $options,
        public Optional|string $external_data,
        public Optional|ProductInformationData $product_information
    )
    {
    }

}
