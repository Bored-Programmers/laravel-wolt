<?php

namespace BoredProgrammers\Wolt\DTO;

use BoredProgrammers\Wolt\Enums\WoltDeliveryType;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;

class ItemData extends Data
{

    public function __construct(
        #[DataCollectionOf(LanguageValueData::class)]
        public array|Collection $name,
        #[DataCollectionOf(OptionData::class)]
        public array|Collection $options,
        public float $price,
        public ?string $image_url = null,
        public ?string $external_data = null,
        public float $sales_tax_percentage = 0,
        public bool $enabled = true,
        public array|Collection $delivery_methods = [WoltDeliveryType::HOME_DELIVERY, WoltDeliveryType::TAKEAWAY]
    )
    {
    }

}