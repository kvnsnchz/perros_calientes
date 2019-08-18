<?php

use Illuminate\Database\Seeder;
use App\Ingrediente;

class IngredientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingrediente::create([
            'nombre'    =>  'Papitas',
        ]);

        Ingrediente::create([
            'nombre'    =>  'Salsas',
        ]);

        Ingrediente::create([
            'nombre'    =>  'Queso',
        ]);

        Ingrediente::create([
            'nombre'    =>  'Vegetales',
        ]);
    }
}
