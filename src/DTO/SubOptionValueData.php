<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Illuminate\Support\Collection;

class SubOptionValueData extends Data
{

    public function __construct(
        public bool $enabled,
        #[DataCollectionOf(LanguageValueData::class)]
        public array|Collection $name,
        public float $price,
        public ?bool $default,
        public string $external_data,
    )
    {
    }

}