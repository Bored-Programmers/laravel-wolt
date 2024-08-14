<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class OptionValueData extends Data
{

    public function __construct(
        /** @var TranslationData[] */
        public DataCollection $name,
        public SelectionRangeData $selection_range,
        public float $price,
        public bool $enabled,
        public bool $default,
        public string $external_data,
        /** @var SubOptionValueData[]|Optional */
        public Optional|DataCollection $sub_option_values
    )
    {
    }

}
