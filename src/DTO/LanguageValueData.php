<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;

class LanguageValueData extends Data
{

    public function __construct(
        public string $value,
        public string $lang,
    )
    {
    }

}