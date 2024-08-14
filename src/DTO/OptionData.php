<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class OptionData extends Data
{

    public function __construct(
        /** @var TranslationData[] */
        public DataCollection $name,
        public string $type,
        public SelectionRangeData $selection_range,
        /** @var OptionValueData[] */
        public DataCollection $values,
        public ?string $external_data = null,
    )
    {
    }

}
