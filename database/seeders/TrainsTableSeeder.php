<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Testing\Fakes\Fake;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();
        $newTrain->Azienda = 'italo';
        $newTrain->Stazione_partenza = 'trani';
        $newTrain->Stazione_arrivo = 'foggia';
        $newTrain->Orario_partenza = '12:05';
        $newTrain->Orario_arrivo = '14:00';
        $newTrain->Codice_treno = 'fwheeu67';
        $newTrain->Numero_carrozze = 5;
        $newTrain->save();
    }
}
