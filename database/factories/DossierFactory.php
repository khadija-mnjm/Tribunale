<?php 
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dossier;

class DossierFactory extends Factory
{
    protected $model = Dossier::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numeroD' => $this->faker->randomNumber(5),
            'avocat_id' => function () {
                return \App\Models\Avocat::factory()->create()->id;
            },
            'commission' => $this->faker->word,
            'dateDossier' => $this->faker->date,
            'refJuridique' => $this->faker->word,
            'refDecision' => $this->faker->word,
            'tribunale_id' => function () {
                return \App\Models\Tribunale::factory()->create()->id;
            },
            'benificier_id' => function () {
                return \App\Models\Benificier::factory()->create()->id;
            },
            'dateAideJustice' => $this->faker->date,
            'prix' => $this->faker->randomFloat(2, 100, 1000),
            'validate' => $this->faker->boolean,
            'refPerfermance' => $this->faker->word,
            'refEngagement' => $this->faker->word,
            'refEditions' => $this->faker->word,
            'date_ds_aide_etat' => $this->faker->date,
        ];
    }
}
