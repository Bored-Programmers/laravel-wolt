<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class OptionData extends Data
{
    public function __construct(
        /** @var \BoredProgrammers\Wolt\DTO\TranslationData[] */
        public DataCollection $name,
        public string $type,
        public SelectionRangeData $selection_range,
        public ?string $external_data = null,
        /** @var \BoredProgrammers\Wolt\DTO\OptionValueData[] */
        public DataCollection $values
    ) {}
}
