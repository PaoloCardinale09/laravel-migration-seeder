<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 1000; $i++){

        
       $train =  new Train;

        $train->azienda	= $faker->company() ;
        $train->stazione_di_partenza= $faker->city();	
        $train->stazione_di_arrivo= $faker->city();
        $train->data_partenza= $faker->dateTimeBetween('0 day', '+1 week');
        $train->orario_partenza	= $faker->time();
        $train->orario_arrivo= $faker->time();
        $train->codice_treno= $faker->bothify('???-#####');	
        $train->numero_carrozze	= $faker->randomNumber(2, true);
        $train->in_orario	= $faker->boolean();
        $train->cancellato	= $faker->boolean();
       
        $train->save();
        }
    }
}