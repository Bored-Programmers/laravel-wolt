<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Optional;

class OptionData extends Data
{

    public function __construct(
        /** @var TranslationData[] */
        public DataCollection $name,
        public string $type,
        public SelectionRangeData $selection_range,
        /** @var OptionValueData[] */
        public DataCollection $values,
        public Optional|string $external_data,
    )
    {
    }

}
