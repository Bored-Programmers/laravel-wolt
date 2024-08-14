<?php

namespace BoredProgrammers\Wolt\DTO;

use Spatie\LaravelData\Data;

class NutritionValuesData extends Data
{

    public function __construct(
        public NutrientData $energy_kcal,
        public NutrientData $energy_kj,
        public NutrientData $fats,
        public NutrientData $saturated_fats,
        public NutrientData $mono_unsaturated_fats,
        public NutrientData $poly_unsaturated_fats,
        public NutrientData $carbohydrate,
        public NutrientData $sugar,
        public NutrientData $starch,
        public NutrientData $polyols,
        public NutrientData $protein,
        public NutrientData $salt,
        public NutrientData $sodium,
        public NutrientData $fibres,
        public NutrientData $vitamin_c,
        public NutrientData $potassium,
        public NutrientData $calcium,
        public NutrientData $magnesium,
        public NutrientData $chloride,
        public NutrientData $fluoride
    )
    {
    }

}
