<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Correr solo una vez
        $this->call(DimensionFechaSeeder::class);
        $this->call(BebidasSeeder::class);
        $this->call(IngredientesSeeder::class);
        $this->call(SalchichasSeeder::class);
        $this->call(PerrosSeeder::class);
        $this->call(SucursalesSeeder::class);
        $this->call(ClientesSeeder::class);
        

        //Correr una vez cada 3 semanas
        $this->call(FacturaSeeder::class);
    }
}
