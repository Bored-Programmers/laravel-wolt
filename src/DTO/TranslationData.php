<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;

class TranslationData extends Data
{
    public function __construct(
        public string $lang,
        public string $value
    ) {}
}
