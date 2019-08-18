<?php

use Illuminate\Database\Seeder;
use App\Sucursal;

class SucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sucursal::create([
            'nombre'    =>  'Sucursal Bo. Obrero',
            'direccion' => 'Barrio Obrero'
        ]);

        Sucursal::create([
            'nombre'    =>  'Sucursal Bo. Sucre',
            'direccion' => 'Barrio Sucre'
        ]);

        Sucursal::create([
            'nombre'    =>  'Sucursal La Carabobo',
            'direccion' => 'Av. Carabobo'
        ]);

        Sucursal::create([
            'nombre'    =>  'Sucursal Rubio',
            'direccion' => 'Rubio'
        ]);

        Sucursal::create([
            'nombre'    =>  'Sucursal Zona Industrial',
            'direccion' => 'Zona Industrial'
        ]);


    }
}
