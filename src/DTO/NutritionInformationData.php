<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;

class NutritionInformationData extends Data
{

    public function __construct(
        public string $serving_size,
        public NutritionValuesData $nutrition_values
    )
    {
    }

}
