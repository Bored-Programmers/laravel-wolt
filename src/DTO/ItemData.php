<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ItemData extends Data
{
    public function __construct(
        /** @var \BoredProgrammers\Wolt\DTO\TranslationData[] */
        public DataCollection $name,
        /** @var \BoredProgrammers\Wolt\DTO\TranslationData[]|null */
        public ?DataCollection $description = null,
        public ?string $image_url,
        public float $price,
        public float $sales_tax_percentage,
        public ?float $alcohol_percentage = null,
        public ?CaffeineContentData $caffeine_content = null,
        /** @var \BoredProgrammers\Wolt\DTO\WeeklyAvailabilityData[]|null */
        public ?DataCollection $weekly_availability = null,
        /** @var \BoredProgrammers\Wolt\DTO\WeeklyVisibilityData[]|null */
        public ?DataCollection $weekly_visibility = null,
        public bool $enabled,
        /** @var string[] */
        public array $delivery_methods,
        /** @var \BoredProgrammers\Wolt\DTO\OptionData[]|null */
        public ?DataCollection $options = null,
        public ?string $external_data = null,
        public ?ProductInformationData $product_information = null
    ) {}
}
