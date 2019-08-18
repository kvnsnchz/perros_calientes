<?php

use Illuminate\Database\Seeder;
use App\Perro;

class PerrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perro::create([
            'nombre'    =>  'Hot-Dog Cabanossi',
            'precio'    =>  30000,
            'salchicha_id' => 1
        ]);

        Perro::create([
            'nombre'    =>  'Hot-Dog Chistorra',
            'precio'    =>  30000,
            'salchicha_id' => 2
        ]);

        Perro::create([
            'nombre'    =>  'Hot-Dog Toulouse',
            'precio'    =>  35000,
            'salchicha_id' => 3
        ]);

        Perro::create([
            'nombre'    =>  'Hot-Dog Viena',
            'precio'    =>  35000,
            'salchicha_id' => 4
        ]);

        Perro::create([
            'nombre'    =>  'Hot-Dog Frankfurt',
            'precio'    =>  35000,
            'salchicha_id' => 5
        ]);

        Perro::create([
            'nombre'    =>  'Hot-Dog Huacho',
            'precio'    =>  30000,
            'salchicha_id' => 6
        ]);

        Perro::create([
            'nombre'    =>  'Hot-Dog Zaratan',
            'precio'    =>  30000,
            'salchicha_id' => 7
        ]);

    }
}
