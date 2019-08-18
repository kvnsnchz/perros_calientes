<?php

use Illuminate\Database\Seeder;
use App\Bebida;

class BebidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bebida::create([
            'nombre'    =>  'Coca Cola',
            'precio'          => 20000
        ]);

        Bebida::create([
            'nombre'    =>  'Pepsi',
            'precio'          => 18000
        ]);

        Bebida::create([
            'nombre'    =>  'Sprite',
            'precio'          => 20000
        ]);

        Bebida::create([
            'nombre'    =>  'Hit',
            'precio'          => 20000
        ]);

        Bebida::create([
            'nombre'    =>  'Heineken',
            'precio'          => 35000
        ]);

        Bebida::create([
            'nombre'    =>  'Corona',
            'precio'          => 30000
        ]);
    }
}
