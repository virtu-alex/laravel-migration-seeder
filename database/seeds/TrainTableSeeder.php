<?php

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();

            $new_train->azienda = $faker->name();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->numberBetween(1,24);
            $new_train->orario_di_arrivo = $faker->numberBetween(1,24);
            $new_train->codice_treno = $faker->randomFloat();
            $new_train->numero_carrozze = $faker->randomDigit();
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();

            $new_train->save();
        }
        // $trains = config('trains');
        // foreach ($trains as $train){
        //     $new_train->fill($train);
        // $new_train->azienda = $train['azienda'];
        // $new_train->stazione_di_partenza = $train['stazione_di_partenza'];
        // $new_train->stazione_di_arrivo = $train['stazione_di_arrivo'];
        // $new_train->orario_di_partenza = $train['orario_di_partenza'];
        // $new_train->orario_di_arrivo = $train['orario_di_arrivo'];
        // $new_train->codice_treno = $train['codice_treno'];
        // $new_train->numero_carrozze = $train['numero_carrozze'];
        // $new_train->in_orario = $train['in_orario'];
        // $new_train->cancellato = $train['cancellato'];
        // }
    }
}
