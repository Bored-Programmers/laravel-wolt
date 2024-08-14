<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Illuminate\Support\Collection;

class OptionData extends Data
{

    public function __construct(
        #[DataCollectionOf(LanguageValueData::class)]
        public array|Collection $name,
        public string $type,
        #[DataCollectionOf(ValueData::class)]
        public array|Collection $values,
        public ?SelectionRange $selection_range,
        public ?string $external_data = null,
    )
    {
    }

}