<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

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
        /** @var TranslationData[]|null */
        public ?DataCollection $description = null,
        public ?float $alcohol_percentage = null,
        public ?CaffeineContentData $caffeine_content = null,
        /** @var WeeklyAvailabilityData[]|null */
        public ?DataCollection $weekly_availability = null,
        /** @var WeeklyVisibilityData[]|null */
        public ?DataCollection $weekly_visibility = null,
        /** @var OptionData[]|null */
        public ?DataCollection $options = null,
        public ?string $external_data = null,
        public ?ProductInformationData $product_information = null
    )
    {
    }

}
