<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class OptionValueData extends Data
{
    public function __construct(
        /** @var \BoredProgrammers\Wolt\DTO\TranslationData[] */
        public DataCollection $name,
        public SelectionRangeData $selection_range,
        public float $price,
        public bool $enabled,
        public bool $default,
        public string $external_data,
        /** @var \BoredProgrammers\Wolt\DTO\SubOptionValueData[]|null */
        public ?DataCollection $sub_option_values = null
    ) {}
}
