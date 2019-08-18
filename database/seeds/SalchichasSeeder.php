<?php

use Illuminate\Database\Seeder;
use App\Salchicha;

class SalchichasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Salchicha::create([
            'nombre'    =>  'Cabanossi',
        ]);

        Salchicha::create([
            'nombre'    =>  'Chistorra',
        ]);

        Salchicha::create([
            'nombre'    =>  'Toulouse',
        ]);

        Salchicha::create([
            'nombre'    =>  'Viena',
        ]);

        Salchicha::create([
            'nombre'    =>  'Frankfurt',
        ]);

        Salchicha::create([
            'nombre'    =>  'Huacho',
        ]);

        Salchicha::create([
            'nombre'    =>  'Zaratan',
        ]);

    }
}
