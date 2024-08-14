<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class MenuData extends Data
{

    public function __construct(
        public string $id,
        public string $currency,
        public string $primary_language,
        /** @var CategoryData[] */
        public DataCollection $categories
    )
    {
    }

}
