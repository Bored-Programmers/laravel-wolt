<?php

namespace BoredProgrammers\Wolt\DTO;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;

class ValueData extends Data
{

    public function __construct(
        #[DataCollectionOf(LanguageValueData::class)]
        public array|Collection $name,
        public float $price,
        #[DataCollectionOf(SubOptionValueData::class)]
        public null|array|Collection $sub_option_values = null,
        public ?SelectionRange $selection_range = null,
        public bool $enabled = true,
        public ?bool $default = false,
        public ?string $external_data = null,
    )
    {
    }

}